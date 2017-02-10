<?php
use App\User;

if(isset($_GET['nom']) && isset($_GET['prenom']))
{
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];

	$infos_user = User::where('nom', '=', $nom)->where('prenom', '=', $prenom)->join('trombinoscope', 'users.id', '=', 'trombinoscope.user_id')->select('users.email', 'users.annee', 'trombinoscope.association', 'trombinoscope.infos')->first();

	if(!is_null($infos_user))
	{
		$mail = $infos_user->email;
		$annee = $infos_user->annee;
		$association = $infos_user->association;
		$infos = $infos_user->infos;

		echo $nom." ".$prenom."<br>".$mail."<br>Etudiant A".$annee."<br>".$association."<br>".$infos;
	}
}
?>
