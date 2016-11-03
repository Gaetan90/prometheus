@extends('layouts.default')

@section('contenu')
    
        <div class="container">
            @if(session('alert-success'))                                    
                <div class="alert alert-success">
                    {{ session('alert-success') }}
                </div>
            @endif

            @if(session('alert-error'))                                    
                <div class="alert alert-danger">
                    {{ session('alert-error') }}
                </div>
            @endif

            <div class="col-md-8">
            <!--<a href="#"><img class="img-responsive slider" src="slider.jpg" /></a>-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
            <!--
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
            -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/slider.jpg" alt="Chania" >
                  </div>

                  <div class="item">
                    <img src="img/exialan.png" alt="Chania" >
                  </div>
                  <div class="item">
                    <img src="img/logo.png" alt="Flower"  >
                  </div>

                  <div class="item">
                    <img src="img/news.jpg" alt="Flower" >
                  </div>
                    
                    <div class="item">
                    <img src="img/search.png" alt="Flower" >
                  </div>
                    
                    <div class="item">
                    <img src="img/twitter.png" alt="Flower" >
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

            <div class="row article">
                <div class="col-md-4 exialan">
                    <a href="#"><img src="img/exialan.png" class="img-responsive"/></a>
                </div>

                <div class="col-xs-7 exialan">
                    <h4 class="titre_fofo"></h4>
                        <div class="descriptionlan">
                            <div class="descriptionlan">
                            
                            </div>
                        </div>
                </div>
            </div>

            </div>
                
            <div class="col-md-4 col_droite">
            <h4 class="titre_col">Bienvenue sur Prometheus</h4>
                    <div class="description">
                    Présentation des membres Prometheus<br><br>              
                        <img src="img/Photos/Mélanie_Gstalter.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">          
                        <img src="img/Photos/Hugo_Huilier.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">
                        <!--<img src="img/Photos/Victor_Losser.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;"> -->
                        <img src="img/Photos/Mathieu_Menu.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">
                        <img src="img/Photos/Julie_Meyer.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">
                        <img src="img/Photos/François_Schaefer.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">
                        <img src="img/Photos/Emre_Suzen.jpg" width="75px" style="margin-bottom:5px; box-shadow:20px 20px 20px gray;">
                    </div>
                    
            <h4 class="titre_col">Réseaux sociaux</h4>
                <div class="reseaux">
                    <ul class="liste_reseaux">
                        <li class="facebook"><img src="img/facebook.png" style="width: 30px;"/><a href="https://www.facebook.com/ExiaCesiStrasbourg/" target="onglet"> Facebook</a></li>
                        <li class="twitter"><img src="img/twitter.png" style="width: 30px;"/><a href="https://twitter.com/CesiStrasbourg" target="onglet"> Twitter</a></li>
                        <li class="instagram"><img src="img/instagram.png" style="width: 30px;"/><a href="#" target="onglet"> Instagram</a></li>
                    </ul>
                </div>
            <h4 class="titre_col">Dernières news</h4>
                <div class="news">
                    <a href="#"><img src="img/news.jpg" class="img-responsive"/></a>
                    <p class="actu"><FONT size="4pt">Toute l'actualité en temps réel !</FONT></p>
                </div>
            </div>
        </div>
@stop