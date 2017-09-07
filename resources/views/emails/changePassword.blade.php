<!DOCTYPE html>
<html>
<head>
	<title>Changement de mot de passe</title>
</head>
<body>
	Vous avez demandé à changer votre mot de passe via les paramètres. Si c'est bien vous qui avez fait cette demande cliquez 
	<a href="{{ URL::route('users.changePassword', ['token' => $token]) }}">ici</a>.
	<br /><br />
	<span style="color: red;">Si vous n'avez pas demandé à changer votre mot de passe, contactez un membre de Prometheus le plus rapidement possible.</span>
</body>
</html>