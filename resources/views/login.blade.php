@extends('layouts.default')

@section('contenu')
    <div id="container-login">
        <div class="element">
            
            <img id="loginIcon" src="http://localhost/prometheus/public/img/icon.png" style="width: 100px; height: 100px;margin-top: -30%; margin-left: 35%">
                   
            <div class="form">
                {{ Form::open(array('route'=>'users.authenticate')) }}
                    
                    <fieldset class="loginForm">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <!-- <input type="text" name="pseudo" id="pseudo" placeholder="E-mail" size="20" maxlength="10" /> -->
                        {{ Form::text('email', '', array('placeholder'=>'E-mail', 'style'=>'width:90%;height:4vh')) }}
                    </fieldset>

                    <fieldset class="loginForm">
                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                        <!-- <input type="text" name="pseudo" id="pseudo" placeholder="Password" size="20" maxlength="10" /> -->
                        {{ Form::password('password', array('placeholder'=>'Mot de passe', 'style'=>'width:90%;height:4vh')) }}
                    </fieldset>

                    <br />

                    <a href="{{ URL::route('users.askResetPassword') }}">Mot de passe oublié ?</a>

                    <br />
                    
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

                    <!-- <button style="margin-top: 30px;" class="btn btn-default" type="submit">Connexion</button> -->
                    {{ Form::submit('Se connecter', array('class'=>'btn btn-default', 'style'=>'margin-top:30px;width:100%; background-color: #AA1111;border-style:none;color:#FFFFFF;text-transform:uppercase;font-weight:bold;')) }}

                {{ Form::close() }}
            </div>
            <!-- <p style="font-size: 20px; color:#AA1111; margin-left: -10%; margin-top: 10%;"><-- Accueil</p> -->
        </div>
    </div>
@stop
