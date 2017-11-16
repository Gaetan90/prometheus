@extends('layouts.default')

@section('contenu')
		<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Connexion à l'espace membre</h1>

	               		<hr />

            		<img id="loginIcon" src="http://localhost/prometheus/public/img/icon.png" style="width: 100px; height: 100px;">
	               	</div>
	            </div> 
				<div class="main-center">
					 <div class="form">
                		{{ Form::open(array('route'=>'users.authenticate')) }}
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
									
									{{ Form::text('email', '', array('placeholder'=>'E-mail', 'class'=>'form-control')) }}
								</div>
							</div>
						</div>

					
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon">
                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
									{{ Form::password('password', array('type'=>'button', 'placeholder'=>'Mot de passe', 'class'=>'form-control')) }}
								</div>
							</div>
						</div>



						<div class="form-group ">
							
						{{ Form::button('Se connecter', array('type'=>'submit','class'=>'btn btn-primary btn-lg btn-block login-button')) }}
						</div>

						                    @if(session('alert-fail'))                                    
                        <div class="alert alert-danger">
                            {{ session('alert-fail') }}
                        </div>
                    @endif

                    @if(session('accountNotValidated'))                                    
                        <div class="alert alert-info">
                            {{ session('accountNotValidated') }}
                        </div>
                    @endif
{{ Form::close() }}
					</div>
				</div>
			</div>

                    
                {{ Form::close() }}
            </div><!--
            <!-- <p style="font-size: 20px; color:#AA1111; margin-left: -10%; margin-top: 10%;"><-- Accueil</p> -->
        </div>
    </div>
@stop
