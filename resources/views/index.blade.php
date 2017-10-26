<!--
  Page d'entrée de l'application
-->

@extends('layouts.default')

@section('contenu')
  <div class="row ">
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
     

 
    <section class="col-md-8"> 
      <!-- 
          ################################################
          ##########          CAROUSEL          ########## 
          ################################################
      -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- PAGINATION -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- CONTENT -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="img/slider.jpg" alt="First slide">
          </div>

          <div class="item">
            <img class="second-slide" src="img/exialan.png" alt="Second slide">
          </div>

          <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Exemple de Titre.</h1>
                <p>On peut également ajouter une petite description juste la! :)</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Valider une action</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- CONTROLLERS -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->
    </section>

    <section id="equipe" class="col-md-3 col-md-offset-1">
      <h4 class="insetshadow">L'équipe Prometheus</h4>
      <div class="description">             
        <img src="img/Photos/Mélanie_Gstalter.jpg" class="img-thumbnail profilePicture">      
        <img src="img/Photos/Hugo_Huilier.jpg" class="img-thumbnail profilePicture">
        <img src="img/Photos/Mathieu_Menu.jpg" class="img-thumbnail profilePicture">
        <img src="img/Photos/Julie_Meyer.jpg" class="img-thumbnail profilePicture">
        <img src="img/Photos/François_Schaefer.jpg" class="img-thumbnail profilePicture">
        <img src="img/Photos/Emre_Suzen.jpg" class="img-thumbnail profilePicture">
      </div>
    </section>
  </div>

  <div class="row top-space">
    <section id="news" class="col-md-8">
        <h4 class="insetshadow">Dernières news</h4>
          
        <?php
        foreach($news as $new)
        {
            $date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $new->created_at);
            $date = $date->format('d/m/Y à H:i');

            $author = App\User::find($new->user_id);

            if($new->img != NULL)
            {
              echo "<div class=\"panel panel-default article\">
                          <div class=\"panel-heading\">#".$new->id." ".$new->title."</div>
                          <div class=\"panel-body\">   
                            <div class=\"row\">   
                              <div class=\"col-lg-3\">                  
                                  <a href=\"\" rel=\"popup_img\" class=\"poplight\"><img width=\"100%\" src=\"\prometheus/public/img/files/".$new->img."\" alt=\"Image de la news\" /></a>
                                </div>

                                <div class=\"col-lg-9\">
                                  ".$new->text."
                                </div>
                              </div>
                          </div>
                          <div class=\"panel-footer\">Publié par ".$author->nom." ".$author->prenom." le ".$date."</div>
                      </div>
                      <div id=\"popup_img\" class=\"popup_block\">
                        <img width=\"100%\" src=\"\prometheus/public/img/files/".$new->img."\" alt=\"Image de la news\" /><a href=\"\" class=\"close\">X</a>
                      </div>";
            }

            else
            {
              echo "  <div class=\"panel panel-default article\">
                          <div class=\"panel-heading\">#".$new->id." ".$new->title."</div>
                          <div class=\"panel-body\">                        
                              ".$new->text."
                          </div>
                          <div class=\"panel-footer\">Publié par ".$author->nom." ".$author->prenom." le ".$date."</div>
                      </div>";
          }
        }
        ?>
    </section>   

    

    <section id="socialNetworks" class="col-md-3 col-md-offset-1">
      <!-- SOCIAL NETWORKS -->          
      <h4 class="insetshadow">Réseaux sociaux</h4>
      <div class="reseaux">
        <ul class="liste_reseaux">
          <li class="facebook">
            <img src="img/facebook.png" style="width: 30px;"/>
            <a href="https://www.facebook.com/ExiaCesiStrasbourg/" target="onglet">Facebook</a>
          </li>

          <li class="twitter"><img src="img/twitter.png" style="width: 30px;"/>
            <a href="https://twitter.com/CesiStrasbourg" target="onglet">Twitter</a>
          </li>

          <li class="instagram">
            <img src="img/instagram.png" style="width: 30px;"/>
            <a href="#" target="onglet">Instagram</a>
          </li>
        </ul>
      </div>
    </section>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.js-scrollTo').on('click', function() { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
        return false;
      });
    });
  </script>
@stop
