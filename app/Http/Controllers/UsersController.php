<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\News;
use App\Notification;
use App\Trombinoscope;
use App\User;
use App\ValidateAccount;
use App\ResetPassword;

class UsersController extends Controller
{
    public function login()
    {
        if(Auth::check())
        {
            Auth::logout();
        }

    	return view('login');
    }

    public function authenticate(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');

    	if(Auth::attempt(['email' => $email, 'password' => $password], 1)) 
    	{        	
            $user = User::where('email', $email)->first();

            if($user->isAccountValidated)
            {
                return redirect()->route('users.index');
            }

            else
            {
                return redirect('users/login')->with('accountNotValidated', 'Votre compte n\'est pas validé.');
            }
        }

        else
        {
        	return redirect('users/login')->with('alert-fail', 'Identifiants incorrect !');
        }
    }

    public function index()
    {
        $user = Auth::user();

        return view('users.index')->with(['user'=>$user]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index')->with('alert-success', 'Vous êtes déconnecté, à bientôt !');
    }

    public function parameters()
    {
        $user = Auth::user();

        return view('users.parameters')->with(['user'=>$user]);
    }

    public function parametersEdit(Request $request)
    {
        $messages = [
                        'required'    => 'Ce champ est requis !',                       
                        'password.min' => 'Le mot de passe doit être composé de 6 caractères minimum',
                        'password.confirmed' => 'Les mots de passe sont différents',
                        'year.min' => 'L\'année doit être comprise entre 1 et 5',
                        'year.max' => 'L\'année doit être comprise entre 1 et 5',
                        'tel.digits' => 'Le numéro de téléphone doit être composé de 10 chiffres'
                    ];

        $validator = Validator::make($request->all(), [            
            'password' => 'min:6|confirmed',
            'tel' => 'required|digits:10',
            'year' => 'required|min:1|max:5',
        ], $messages);

        if($validator->fails()) {
            return redirect()->route('users.parameters')                        
                        ->withErrors($validator)
                        ->withInput();
        }

        $new_tel = $request->input('tel');
        $new_annee = $request->input('year');
        $password = $request->input('password');

        $user = Auth::user();
        $user->tel = $new_tel;
        $user->annee = $new_annee;
        $user->save();

        if($password != "")
        {
            Mail::send(new \App\Mail\changePassword($user, $password));

            return redirect()->route('users.parameters')->with('alert-success', 'Les modifications ont été prises en compte. Pour le changement de mot de passe, un mail vous a été envoyé afin de confirmer le changement.');
        }

        return redirect()->route('users.parameters')->with('alert-success', 'Les modifications ont été prises en compte.');
    }

    public function trombinoscope()
    {
        $user = Auth::user();

        return view('users.trombinoscope')->with(['user'=>$user]);
    }

    public function news($page)
    {
        $numberNews = News::count();
        $newsPerPage = 3;
        $maxPage = ceil($numberNews / $newsPerPage);        

        if($page <= 0 || $page > $maxPage)
        {
            return redirect()->route('users.news', [1]);
        }

        $min = ($page - 1) * $newsPerPage;

        $user = Auth::user();
        $news = News::orderBy('id', 'desc')->offset($min)->limit($newsPerPage)->get();
        
        return view('users.news')->with(['user'=>$user, 'news'=>$news, 'maxPage' => $maxPage, 'page' => $page]);
    }

    public function newsPost(Request $request)
    {
        $user = Auth::user();

        $messages = [
                        'required'    => 'Ce champ est requis !',
                        'min' => 'Ce champ doit compter au moins 1 caractère !',
                    ];

        $validator = Validator::make($request->all(), [
            'title' => 'required|min:1',
            'text' => 'required|min:1',           
        ], $messages);

        if($validator->fails()) {
            return redirect()->route('users.news', [1])
                        ->with(['user'=>$user])
                        ->withErrors($validator)
                        ->withInput();
        }

        $nom = NULL;

        if($_FILES['file']['name'] != "")
        {
            if($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE || $_FILES['file']['error'] == UPLOAD_ERR_FORM_SIZE)
            { 
                return redirect()->route('users.news', [1])->with(['alert-error'=>'Fichier trop volumineux']);
            }

            if($_FILES['file']['size'] > $request->input('MAX_FILE_SIZE'))
            {
                return redirect()->route('users.news', [1])->with(['alert-error'=>'Fichier trop volumineux']);
            }

            if($_FILES['file']['error'] == UPLOAD_ERR_PARTIAL)
            {
                return redirect()->route('users.news', [1])->with(['alert-error'=>'Fichier transféré partiellement']);
            }

            $extensions_valides = array('jpg','jpeg','gif','png');
            $extension_upload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1));

            if(!in_array($extension_upload,$extensions_valides))
            {
                return redirect()->route('users.news', [1])->with(['alert-error'=>'Extension du fichier non valide']);
            }

            $nbrNews = News::all()->count();

            $id_news = 1;

            if($nbrNews >= 1)
            {
                $id_last_news = News::orderBy('id', 'desc')->first()->id;
                $id_news = $id_last_news+1;
            }

            $nom = "news{$id_news}.{$extension_upload}";
            move_uploaded_file($_FILES['file']['tmp_name'], "img/files/".$nom);
        }
        
        $user_id = $user->id;
        $title = $request->input('title');
        $text = $request->input('text');

        $new = new News;
        $new->user_id = $user_id;
        $new->title = $title;
        $new->text = $text;
        $new->img = $nom;
        $new->save();

        $association = Trombinoscope::where('user_id', $user->id)->select('association')->get();

        $members_association = Trombinoscope::where('association', $association[0]->association)->get();

        foreach($members_association as $member)
        {
            $notification = new Notification;
            $notification->id_user = $user_id;
            $notification->id_user_notify = $member->user_id;
            $notification->text = "Votre président d'association a posté une news.";
            $notification->save();
        }

        return redirect()->route('users.news', [1])->with(['user'=>$user, 'alert-success'=>'Votre news a bien été posté']);
    }

    public function register()
    {
        return view('register');
    }

    public function signUp(Request $request)
    {
        $messages = [
                        'required'    => 'Ce champ est requis !',
                        'lastname.min' => 'Ce champ doit compter au moins 2 caractère !',
                        'firstname.min' => 'Ce champ doit compter au moins 2 caractères !',
                        'password.min' => 'Le mot de passe doit être composé de 6 caractères minimum',
                        'password.confirmed' => 'Les mots de passe sont différents',
                        'year.min' => 'L\'année doit être comprise entre 1 et 5',
                        'year.max' => 'L\'année doit être comprise entre 1 et 5',
                        'email.regex' => 'L\'adresse mail doit finir par @viacesi.fr',
                        'email.unique' => 'Votre adresse mail est déjà utilisée',
                        'tel.digits' => 'Le numéro de téléphone doit être composé de 10 chiffres'
                    ];

        $validator = Validator::make($request->all(), [
            'lastname' => 'required|min:2',
            'firstname' => 'required|min:2',
            'email' => array('required', 'email', 'regex:/.+@viacesi\.fr$/', 'unique:users,email'),
            'password' => 'required|min:6|confirmed',
            'sexe' => 'required',
            'tel' => 'required|digits:10',
            'year' => 'required|min:1|max:5',
        ], $messages);

        if($validator->fails()) {
            return redirect()->route('users.register')                        
                        ->withErrors($validator)
                        ->withInput();
        }

        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $password = $request->input('password');        
        $sexe = $request->input('sexe');
        $tel = $request->input('tel');
        $year = $request->input('year');

        $isAlreadyRegistered = User::where('nom', $lastname)->where('prenom', $firstname)->count();

        if($isAlreadyRegistered == 0)
        {
            $user = new User;
            $user->nom = $lastname;
            $user->prenom = $firstname;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->sexe = $sexe;
            $user->tel = $tel;
            $user->annee = $year;
            $user->isAccountValidated = false;
            $user->save();

            Mail::send(new \App\Mail\validateAccount($user));

            return redirect()->route('users.register')->with(['alert-success' => 'Afin de valider votre compte, un e-mail vous a été envoyé.']);
        }

        else
        {
            return redirect()->route('users.register')->with(['error-name' => 'Vous avez déjà un compte.'])->withInput();
        }
    }

    public function validateAccount($token)
    {
        $hasOne = ValidateAccount::where('remember_token', $token)->get();

        if($hasOne->count() == 1)
        {
            $user_id = $hasOne[0]->user_id;

            $user = User::find($user_id);
            $user->isAccountValidated = true;
            $user->save();
        }

        ValidateAccount::where('remember_token', $token)->delete();

        return redirect()->route('index');
    }

    public function changePassword($token)
    {
        $hasOne = ResetPassword::where('remember_token', $token)->get();

        if($hasOne->count() == 1)
        {
            $user_id = $hasOne[0]->user_id;

            $user = User::find($user_id);
            $user->password = $hasOne[0]->password;
            $user->save();
        }

        ResetPassword::where('remember_token', $token)->delete();

        return redirect()->route('index');
    }

    public function askResetPassword()
    {
        return view('askResetPassword');
    }

    public function askResetPasswordPost(Request $request)
    {
        $messages = [
                        'required'    => 'Ce champ est requis !',
                        'lastname.min' => 'Ce champ doit compter au moins 2 caractère !',
                        'firstname.min' => 'Ce champ doit compter au moins 2 caractères !',                        
                    ];

        $validator = Validator::make($request->all(), [
            'lastname' => 'required|min:2',
            'firstname' => 'required|min:2',           
        ], $messages);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $lastname = $request->input('lastname');
        $firstname = $request->input('firstname');

        $user = User::where('nom', $lastname)->where('prenom', $firstname)->first();

        if(isset($user))
        {
            Mail::send(new \App\Mail\resetPassword($user));

            return back()->with(['alert-success' => 'Un mail vous a été envoyé pour changer votre mot de passe.']);
        }

        else
        {
            return back()->withInput()->with(['account-error' => 'Aucun compte trouvé']);
        }
    }

    public function resetPassword($token)
    {
        $hasOne = ResetPassword::where('remember_token', $token)->get();

        if($hasOne->count() == 1)
        {
            $user_id = $hasOne[0]->user_id;

            return view('resetPassword')->with(['token' => $token]);
        }

        else
        {
            return redirect()->route('index');
        }
    }

    public function resetPasswordPost(Request $request, $token)
    {
        $messages = [
                        'required'    => 'Ce champ est requis !',                        
                        'password.min' => 'Le mot de passe doit être composé de 6 caractères minimum',
                        'password.confirmed' => 'Les mots de passe sont différents',                        
                    ];

        $validator = Validator::make($request->all(), [           
            'password' => 'required|min:6|confirmed',
        ], $messages);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $password = $request->input('password');

        $hasOne = ResetPassword::where('remember_token', $token)->get();

        if($hasOne->count() == 1)
        {
            $user_id = $hasOne[0]->user_id;

            $user = User::find($user_id);
            $user->password = bcrypt($password);
            $user->save();

            ResetPassword::where('remember_token', $token)->delete();

            return redirect()->route('index')->with(['alert-success-password' => 'Votre mot de passe a bien été changé.']);
        }

        else
        {
            return redirect()->route('index');
        }
    }
}
