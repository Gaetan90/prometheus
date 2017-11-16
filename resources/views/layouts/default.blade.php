<!DOCTYPE html>
<html lang="fr" data-token="{{ csrf_token() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Prometheus</title>

    <link rel="shortcut icon" href="{{ asset('logo.png') }}">
    <!-- Bootstrap -->
    <link href="http://localhost/prometheus/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/prometheus/public/css/style.css" rel="stylesheet">  
    @if(Route::currentRouteName() == 'users.register')
        <link href="http://localhost/prometheus/public/css/register.css" rel="stylesheet">
    @endif     
    @if(Route::currentRouteName() == 'users.login')
        <link href="http://localhost/prometheus/public/css/login.css" rel="stylesheet">
    @endif     
    @if(Route::currentRouteName() == 'users.trombinoscope')
        <link href="http://localhost/prometheus/public/css/trombinoscope.css" rel="stylesheet">
    @endif


    <style>
    /* Sticky footer styles-------------------------------------------------- */
    html {
      position: relative;
      min-height: 100%;
      width: 100%;
    }
    body {
      /* Margin bottom by footer height + 20px */
      margin-bottom: 140px;
      margin-top: 20px;
    }
    .footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      /* Set the fixed height of the footer here */
      height: 120px;
      background-color: #c2242a;
    }

    body > .container {
      padding: 60px 15px 0;
    }
    .footer > .container {
      padding-right: 15px;
      padding-left: 15px;
    }
   
    </style>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        @if(Route::currentRouteName() == 'users.trombinoscope')         
            <script type="text/javascript" src="http://localhost/prometheus/public/js/jquery.autocomplete.min.js"></script>
            <script type="text/javascript" src="http://localhost/prometheus/public/js/trombinoscope.js"></script>   
        @endif
        <script src="http://localhost/prometheus/public/js/bootstrap.min.js"></script>      
        <script type="text/javascript" src="http://localhost/prometheus/public/js/popup.js"></script> 
    </head>
<body>
    
    <!-- Fixed navbar -->
        <div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::route('index') }}">Prometheus</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse">
                    @if(Auth::check())
                        <ul class="nav navbar-nav">
                            <li><a href="{{ URL::route('users.index') }}">Accueil</a></li>
                            <li><a href="{{ URL::route('users.trombinoscope') }}">Trombinoscope</a></li>
                            <li><a href="{{ URL::route('users.news', [1]) }}">News</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">Dictionnaire &nbsp<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ URL::route('users.dictionary') }}">Ajouter un mot clé</a></li>
                                    @if($isPrometheus)
                                        <li><a href="{{ URL::route('users.dictionary.words') }}">Liste des mots clés à valider</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li><a href="{{ URL::route('users.parameters') }}">Paramètres</a></li>
                            <li class="categorie"><a href="{{ URL::route('users.logout') }}"">Déconnexion</a></li>
                        </ul>
                                    
                        <div id="user">                             
                            <img src="http://localhost/prometheus/public/img/Photos/{{ $user->prenom }}_{{ $user->nom }}.jpg" id="user_img" />
                        </div>
                    @else                               
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ URL::route('users.register') }}">Inscription</a></li>
                            <li class="categorie"><a href="{{ URL::route('users.login') }}">Se connecter</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </div> <!-- END OF NAVBAR -->

    <!-- Begin page content -->
    <div class="container">
        @yield('contenu')
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
                <div class="col-md-4 col-xs-4">
                    <img class="logo" src="img/logo.png" alt="Prometheus logo">
                </div>

                <div class="col-md-4 col-xs-4">
                    <a href="#">Contact</a><br>
                    <a href="#">Adresse des centres </a><br>
                    <a href="#">Nous contacter </a><br>
                    <a href="#">E-mail </a>
                </div>

                <div class="col-md-4 col-xs-4">
                    <p> Adresse de l'association :<br>
                        Prometheus eXia.Cesi<br>
                        2 Allée des Foulons<br>
                        67380 Strasbourg Lingolsheim</p>
                </div>
            </div>
      </div>
    </footer>

</body>
</html>