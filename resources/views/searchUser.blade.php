<?php
use App\User;

if(isset($_GET['nom']) && isset($_GET['prenom']))
{
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];

	$user = User::where('nom', '=', $nom)->where('prenom', '=', $prenom)->join('trombinoscope', 'users.id', '=', 'trombinoscope.user_id')->select('trombinoscope.salle')->first();
	
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