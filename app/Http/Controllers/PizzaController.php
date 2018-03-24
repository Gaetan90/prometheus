<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Pizza;
use App\Commande;



class PizzaController extends Controller
{
     public function index($successMsg = null){
          $user = Auth::user();
          $pizzas = Pizza::all();
          $nextFriday = date("Y-m-d",strtotime('next friday'));
          $orderNextFriday = Commande::where('date_livraison',$nextFriday)->where('user_id', $user->id)->get();
          if($orderNextFriday->isEmpty()){ // l'utilisateur n'a pas encore commandé pour le vendredi prochain
               return view('pizzas/pizzaIndex')->with(['user'=>$user,'pizzas'=>$pizzas]); 
          }else{ // l'utilisateur a deja commandé -> liste de ses commandes
               if(Input::has('successMsg')) { $successMsg = Input::get('successMsg'); }
               $commandes = Commande::where('user_id', $user->id)->where('date_livraison', '<', $nextFriday)->orderBy('date_livraison', 'desc')->get();
               return view('pizzas/pizzaIndex')->with(['user'=>$user,'orderNextFriday'=>$orderNextFriday,'commandes'=>$commandes,'successMsg' => $successMsg]);
          }
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

     public function registerOrder(Request $request){
     	$user = Auth::user();
          $pizzas = Pizza::all();
          $commande = new Commande;
          $commande->date = date("Y-m-d");
          $commande->user_id = $user->id;
          $commande->pizza_id = $request->input('idpizza');
          $commande->date_livraison = date("Y-m-d",strtotime('next friday'));
          $commande->save();
          $successMsg = 'Votre commande a été enregistrée.';
          return redirect()->action('PizzaController@index',['successMsg'=>$successMsg]);
     }

     public function listeCommandeEncours(){
          $user = Auth::user();
          $commandes = Commande::where('date_livraison',date("Y-m-d",strtotime('next friday')))->get();
          
          return view('pizzas/listeCommandeEncours')->with(['user'=>$user,'commandes'=>$commandes]);
     }

      public function deleteCommande(Request $request){
          $user = Auth::user();
          $res=Commande::where('id',$request->input('idCommande'))->delete();
          $commandes = Commande::where('date_livraison',date("Y-m-d",strtotime('next friday')))->get();
          return view('pizzas/listeCommandeEncours')->with(['user'=>$user,'commandes'=>$commandes]);
     }



}
