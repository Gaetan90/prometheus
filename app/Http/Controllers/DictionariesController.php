<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;

class DictionariesController extends Controller
{
    public function dictionary() {
    	return view('dictionary');
    }

    public function valid(Request $request) {
    	$validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'definition' => 'required',
            'source' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('users/dictionary')
                        ->with(['alert-fail' => 'Il y a une erreur dans un des champs.'])
                        ->withInput();
        }
    }
}
