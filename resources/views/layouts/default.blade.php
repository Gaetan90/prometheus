<!DOCTYPE html>
<html lang="fr" data-token="{{ csrf_token() }}">
	<head>		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Prometheus</title>
		
		<link rel="shortcut icon" href="{{ asset('logo.png') }}">
		<!-- Bootstrap -->
		<link href="http://localhost/prometheus/public/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://localhost/prometheus/public/css/style.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>		
	</head>

		<header>
			<div class="entete">
				<div class="row">
				
					<div class="col-xs-3">
						<img class="img-responsive logo" src="{{ asset('logo.png') }}" alt="logo">
					</div>					
					
					<div class="col-xs-9 menu">

						@if(Auth::check())
							<nav class="navbar navbar-default" style="width:750px;">
						@else						
							<nav class="navbar navbar-default" style="position: absolute; right: 100px; width:275px;">
						@endif
							<div class="container-fluid">
								<!-- Collect the nav links, forms, and other content for toggling -->

								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								@if(Auth::check())
									<ul class="nav navbar-nav">
										<li><a href="{{ URL::route('users.index') }}">Accueil</a></li>
										<li><a href="{{ URL::route('users.trombinoscope') }}">Trombinoscope</a></li>
										<li><a href="#">News</a></li>
										<li><a href="">Dictionnaire</a></li>
										<li><a href="{{ URL::route('users.parameters') }}">Paramètres</a></li>
										<li><a href="#">Forum</a></li>
										<li class="categorie"><a href="{{ URL::route('users.logout') }}"">Déconnexion</a></li>
									</ul>
									
									<div id="user">								
										<img src="http://localhost/prometheus/public/img/Photos/{{ $user->prenom }}_{{ $user->nom }}.jpg" id="user_img" />
									</div>
								@else								
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#">Inscription</a></li>
										<li class="categorie"><a href="{{ URL::route('users.login') }}">Se connecter</a></li>
									</ul>
								@endif
								<!--
								<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
								<input type="text" class="form-control" placeholder="Recherche">
								</div>
								<button type="submit" class="btn btn-default">Rechercher</button>
								</form>
								-->

							</div><!-- /.navbar-collapse -->
								
								
							</div><!-- /.container-fluid -->

						</nav>
					
					</div>					
				
				</div>


			</div>
		</header>
	<body>
		@yield('contenu');

		<footer>
	        <div class="col-md-2">
	            <img class="img-responsive logo" src="http://localhost/prometheus/public/logo.png" alt="logo">
	        </div>
	            
	        <div class="row">
	            <div class="col-md-3 gauche padding-top">
	                <a href="#">Contact</a></br>
	                <a href="#">Adresse des centres </a></br>
	                <a href="#">Nous contacter </a></br>
	                <a href="#">E-mail </a>
	            </div>
	            <div class="col-md-3 padding-top">
	                <p> <strong>Adresse de l'association :</strong></br>
	                Prometheus eXia.Cesi</br>
	                2 Allée des Foulons</br>
	                67380 Strasbourg Lingolsheim</p>
	            </div>
	        </div>            
	    </footer>
	</body>
</html>		