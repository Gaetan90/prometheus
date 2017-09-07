<!DOCTYPE html>
<html>
<head>
	<title>Mot de passe oublié</title>
</head>
<body>
	Vous avez demandé à changer votre mot de passe via "Mot de passe oublié". Si c'est bien vous qui avez fait cette demande cliquez 
	<a href="{{ URL::route('users.resetPassword', ['token' => $token]) }}">ici</a>.
	<br /><br />
</body>
</html>