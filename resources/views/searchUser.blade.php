<?php
use App\User;

if(!is_null($_GET['nom']) && !is_null($_GET['prenom']))
{
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];

	$user = User::where('nom', '=', $nom)->where('prenom', '=', $prenom)->join('trombinoscope', 'users.id', '=', 'trombinoscope.id')->select('trombinoscope.salle')->first();
	
	if(!is_null($user))
	{
		$salle = $user->salle;
		echo "_".$salle;
	}

	else
	{
		echo "Erreur";
	}
}
?>