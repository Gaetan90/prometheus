<?php
use App\User;

if(!is_null($_GET['query']))
{
    $q = htmlentities($_GET['query']);

    $users = User::where('nom', 'like', $q.'%')->orWhere('prenom', 'like', $q.'%')->take(5)->get();
    $suggestions = [];

    if($users->count() == 0)
    {
    	$suggestions['suggestions'][] = "Aucun étudiant trouvé";
    }

    foreach($users as $user)
    {
        $suggestions['suggestions'][] = $user->nom.' '.$user->prenom;
    }

    echo json_encode($suggestions);
}  
?>