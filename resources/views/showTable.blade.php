<?php
use App\Trombinoscope;

if(isset($_GET['id_div']) && isset($_GET['position']) && $_GET['position'] >= 1 && $_GET['position'] <= 16)
{
	$user = Trombinoscope::where('salle', '=', $_GET['id_div'])->where('position', '=', $_GET['position'])->join('users', 'trombinoscope.user_id', '=', 'users.id')->select('users.prenom', 'users.nom', 'trombinoscope.position')->first();

	if(!is_null($user))
	{
		$prenom = $user->prenom;
		$nom = $user->nom;
		$position = $user->position;

		if($position <= 3)
		{
			$table = 1;
		}
			
		else if($position >= 4 && $position <= 9)
		{
			$table = 2;
			$position = $position - 3;
		}
			
		else
		{
			$table = 3;			
			$position = $position - 10;
		}

		echo ''.$prenom.'_'.$nom.'-'.$position.'/'.$table.'.<br/>';
	}
}
?>