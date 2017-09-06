<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Dictionary;
use App\Notification;

class DictionariesController extends Controller
{
    public function dictionary() {
        $user = Auth::user();

        $categories_collection = Category::where('id_category_parent', 0)->get();
        $categories = [];
        $sous_categories = [];

        foreach($categories_collection as $category)
        {
            $sous_categories[$category->id] = Category::where('id_category_parent', $category->id)->get();
            $categories[$category->category] = [];

            foreach($sous_categories[$category->id] as $sous_category)
            {    
                $categories[$category->category][$sous_category->id] = $sous_category->category;
            }
        }

    	return view('dictionary')->with(['user'=>$user, 'categories'=>$categories]);
    }

    public function valid(Request $request) 
    {
    	$validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'definition' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('users/dictionary')
                        ->with(['alert-fail' => 'Il y a une erreur dans un des champs.'])
                        ->withInput();
        }

        $exist = Category::where('id', $request->input('category'))->count();

        if($exist == 0)
        {
            return redirect('users/dictionary')->with(['alert-fail' => 'Catégorie inexistante']);
        }

        $user = Auth::user();

        $mot = new Dictionary;
        $mot->title = $request->input('title');
        $mot->definition = $request->input('definition');
        $mot->source = $request->input('source');
        $mot->id_user = $user->id;
        $mot->validate = 0;
        $mot->id_category = $request->input('category');
        $mot->save();

        return redirect('users/dictionary')->with(['alert-success' => 'Le mot a bien été ajouté']);
    }

    public function words()
    {
        $categories = Category::where('id_category_parent', 0)->get();
        $words = [];
        $sous_categories = [];

        foreach($categories as $category)
        {
            $sous_categories[$category->id] = Category::where('id_category_parent', $category->id)->get();

            foreach($sous_categories[$category->id] as $sous_category)
            {
                ${'words_'.$sous_category->id} = Dictionary::where('id_category', $sous_category->id)->where('validate', 0)->get();
                $words['words_'.$sous_category->id] = ${'words_'.$sous_category->id};
            }
        }   

        $user = Auth::user();        

        return view('words')->with(['user' => $user, 'words' => $words, 'categories' => $categories, 'sous_categories' => $sous_categories]);
    }

    public function validWord($idMot)
    {
        Dictionary::where('id', $idMot)->update(['validate' => 1]);

        $word = Dictionary::where('id', $idMot)->get();
        $id_user_word = $word[0]->id_user;
        $title_word = $word[0]->title;

        $user_id = Auth::user()->id;

        $notification = new Notification;
        $notification->id_user = $user_id;
        $notification->id_user_notify = $id_user_word;
        $notification->text = "Votre mot clé \"".$title_word."\" a été validé.";
        $notification->save();

        return redirect('users/dictionary/words')->with(['alert-success' => 'Le mot clé a bien été validé.']);
    }

    public function refusWord($idMot)
    {     
        $word = Dictionary::where('id', $idMot)->get();
        $id_user_word = $word[0]->id_user;
        $title_word = $word[0]->title;

        $user_id = Auth::user()->id;

        $notification = new Notification;
        $notification->id_user = $user_id;
        $notification->id_user_notify = $id_user_word;
        $notification->text = "Votre mot clé \"".$title_word."\" a été refusé.";
        $notification->save();

        Dictionary::where('id', $idMot)->delete();

        return redirect('users/dictionary/words')->with(['alert-success' => 'Le mot clé a bien été refusé et a donc été supprimé.']);
    }

    public function allWords()
    {
        $categories = Category::where('id_category_parent', 0)->get();
        $user = Auth::user();        

        $sous_categories = [];

        foreach($categories as $category)
        {
            $sous_categories[$category->id] = Category::where('id_category_parent', $category->id)->get();
        }

        return view('allWords')->with(['user' => $user, 'categories' => $categories, 'sous_categories' => $sous_categories]);
    }

    public function getWordDefinition($idWord)
    {
        $word = Dictionary::where('id', $idWord)->where('validate', 1)->get();
        $user = Auth::user();

        return view('getWordDefinition')->with(['user' => $user, 'word' => $word]);
    }

    public function formEditWord($idWord)
    {
        $user = Auth::user();
        $isUserPostThatWord = Dictionary::where('id', $idWord)->where('validate', 1)->where('id_user', $user->id)->count();

        if($isUserPostThatWord != 1)
        {
            return back();
        }

        $word = Dictionary::where('id', $idWord)->where('validate', 1)->get();        

        $categories_collection = Category::where('id_category_parent', 0)->get();
        $categories = [];
        $sous_categories = [];

        foreach($categories_collection as $category)
        {
            $sous_categories[$category->id] = Category::where('id_category_parent', $category->id)->get();
            $categories[$category->category] = [];

            foreach($sous_categories[$category->id] as $sous_category)
            {    
                $categories[$category->category][$sous_category->id] = $sous_category->category;
            }
        }

        return view('formEditWord')->with(['user' => $user, 'word' => $word[0], 'categories' => $categories]);
    }

    public function editWord(Request $request, $idWord)
    {
        $user = Auth::user();
        $isUserPostThatWord = Dictionary::where('id', $idWord)->where('validate', 1)->where('id_user', $user->id)->count();

        if($isUserPostThatWord != 1)
        {
            return back();
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'definition' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.dictionary.formEditWord', ['idWord' => $idWord])
                        ->with(['alert-fail' => 'Il y a une erreur dans un des champs.'])
                        ->withInput();
        }

        $exist = Category::where('id', $request->input('category'))->count();

        if($exist == 0)
        {
            return redirect()->route('users.dictionary.formEditWord', ['idWord' => $idWord])->with(['alert-fail' => 'Catégorie inexistante']);
        }

        $mot = Dictionary::find($idWord);
        $mot->title = $request->input('title');
        $mot->definition = $request->input('definition');
        $mot->source = $request->input('source');
        $mot->id_category = $request->input('category');
        $mot->save();

        return redirect()->route('users.dictionary.formEditWord', ['idWord' => $idWord])->with(['alert-success' => 'Le mot a bien été modifié']);
    }
}
