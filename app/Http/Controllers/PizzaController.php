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
     	return view('pizzas/pizzaIndex')->with(['user'=>$user,'pizzas'=>$pizzas]);
     }

     public function enterOrder(Request $request){
          $user = Auth::user();
          if($request->input('idpizza') == null){
               $alerte = 'Veuillez selectionner une pizza.';
               $pizzas = Pizza::all();
               return view('pizzas/pizzaIndex')->with(['user'=>$user,'pizzas'=>$pizzas, 'alerte'=>$alerte]);
          }
          $pizza = Pizza::find($request->input('idpizza'));
          return view('pizzas/validerCommande')->with(['user'=>$user,'pizza'=>$pizza]);
     }

     public function registerOrder($idpizza){
     	$user = Auth::user();
          $pizzas = Pizza::all();
          $commande = new Commande;
          $commande->date = date("Y-m-d");
          $commande->user_id = $user->id;
          $commande->pizza_id = $idpizza;
          $commande->date_livraison = date("Y-m-d",strtotime('next friday'));
          $commande->save();
     	
          $successMsg = 'Votre commande a été enregistrée.';
     	return view('pizzas/pizzaIndex')->with(['user'=>$user, 'pizzas'=>$pizzas, 'commande'=>$commande, 'successMsg' => $successMsg]);
     }
}
