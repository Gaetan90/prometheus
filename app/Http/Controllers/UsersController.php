<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $user = Auth::user();
        $user->tel = $new_tel;
        $user->annee = $new_annee;
        $user->save();

        return redirect()->route('users.parameters')->with('alert-success', 'Les modifications ont été prises en compte.');
    }

    public function trombinoscope()
    {
        $user = Auth::user();

        return view('users.trombinoscope')->with(['user'=>$user]);
    }
}
