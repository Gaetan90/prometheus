<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\News;
use App\Notification;
use App\Trombinoscope;

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
            return redirect()->route('users.index');
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
        $new_tel = $request->input('tel');
        $new_annee = $request->input('annee');

        if(strlen($new_tel) != 10 || !ctype_digit($new_tel))
        {
            return redirect()->route('users.parameters')->with(['alert-error' => 'Numéro de téléphone incorrect.']);
        }

        if($new_annee < 1 || $new_annee > 5)
        {
            return redirect()->route('users.parameters')->with(['alert-error' => 'Année incorrecte.']);
        }

        $user = Auth::user();
        $user->tel = $new_tel;
        $user->annee = $new_annee;
        $user->save();

        return redirect()->route('users.parameters')->with('alert-success', 'Les modifications ont été pris en compte.');
    }

    public function trombinoscope()
    {
        $user = Auth::user();

        return view('users.trombinoscope')->with(['user'=>$user]);
    }

    public function news(Request $request)
    {
        $user = Auth::user();
        $news = News::orderBy('id', 'desc')->get();
        
        return view('users.news')->with(['user'=>$user, 'news'=>$news]);
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
            return redirect()->route('users.news')
                        ->with(['user'=>$user])
                        ->withErrors($validator)
                        ->withInput();
        }

        $nom = NULL;

        if($_FILES['file']['name'] != "")
        {
            if($_FILES['file']['error'] == UPLOAD_ERR_INI_SIZE || $_FILES['file']['error'] == UPLOAD_ERR_FORM_SIZE)
            { 
                return redirect()->route('users.news')->with(['alert-error'=>'Fichier trop volumineux']);
            }

            if($_FILES['file']['size'] > $request->input('MAX_FILE_SIZE'))
            {
                return redirect()->route('users.news')->with(['alert-error'=>'Fichier trop volumineux']);
            }

            if($_FILES['file']['error'] == UPLOAD_ERR_PARTIAL)
            {
                return redirect()->route('users.news')->with(['alert-error'=>'Fichier transféré partiellement']);
            }

            $extensions_valides = array('jpg','jpeg','gif','png');
            $extension_upload = strtolower(substr(strrchr($_FILES['file']['name'], '.'), 1));

            if(!in_array($extension_upload,$extensions_valides))
            {
                return redirect()->route('users.news')->with(['alert-error'=>'Extension du fichier non valide']);
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

        return redirect()->route('users.news')->with(['user'=>$user, 'alert-success'=>'Votre news a bien été posté']);
    }
}
