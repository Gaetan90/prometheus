<!DOCTYPE html>
<html>
<head>
	<title>Bienvenue sur Prometheus</title>
</head>
<body>
	Félicitations, votre compte a été créé. Il reste cependant une dernière étape.<br />
	Afin de valider votre compte, cliquez sur le lien suivant :
	<a href="{{ URL::route('users.validateAccount', ['token' => $token]) }}">Valider mon compte</a>
</body>
</html>