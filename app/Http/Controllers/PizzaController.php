<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Pizza;
use App\Commande;



class PizzaController extends Controller
{
     public function index(){
     	$user = Auth::user();
     	$pizzas = Pizza::all();
          $test = 'blabal';
     	return view('pizzas/commande')->with(['user'=>$user,'pizzas'=>$pizzas]);
     }

      public function commande(Request $request){
     	$user = Auth::user();
          if($request->input('pizza') == null){
               $alerte = 'Veuillez selectionner une pizza.';
               $pizzas = Pizza::all();
               return view('pizzas/commande')->with(['user'=>$user,'pizzas'=>$pizzas, 'alerte'=> $alerte]);
          }
     	$pizza = Pizza::find($request->input('pizza'));
          $commande = new Commande;
          $commande->date = date("Y-m-d");
          $commande->user_id = $user->id;
          $commande->pizza_id = $pizza->id;
          $commande->date_livraison = date("Y-m-d",strtotime('next friday'));
          $commande->save();
     	
     	return view('pizzas/validerCommande')->with(['user'=>$user,'pizza'=>$pizza,'commande'=>$commande]);
     }
}
