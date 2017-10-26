@extends('layouts.default')

@section('contenu')
<div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 class="title">Inscription à la plateforme</h1>
                    </div>
                </div> 
                <div class="main-center">
                     <div class="form">
                        {{ Form::open(array('route'=>'users.signUp')) }}
                        
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Nom</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    {{ Form::text('lastname', '', array('placeholder'=>'Nom', 'class'=>'form-control')) }}
                                </div> 
                                @if($errors->has('lastname'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('lastname') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Prénom</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                    </span>
                                    {{ Form::password('firstname', array('type'=>'button', 'placeholder'=>'Prénom', 'class'=>'form-control')) }}
                                </div>
                                 @if($errors->has('firstname'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('firstname') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">E-mail</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                    </span>
                                    {{ Form::text('email', '', array('placeholder'=>'E-mail', 'class'=>'form-control')) }}
                                </div>
                                 @if($errors->has('email'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Mot de passe</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                    </span>
                                    {{ Form::password('password', '', array('placeholder'=>'Mot de passe', 'class'=>'form-control')) }}
                                </div>
                                 @if($errors->has('password'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Confirmer le mot de passe</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                                    </span>
                                    {{ Form::password('password_confirmation', '', array('placeholder'=>'Mot de passe(confirmation)', 'class'=>'form-control')) }}
                                </div>
                                 @if($errors->has('password_confirmation'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label"> F &nbspM</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    {{ Form::radio('sexe', 'Féminin') }} {{ Form::radio('sexe', 'Masculin') }}
                                </div>
                                 @if($errors->has('sexe'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('sexe') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Téléphone</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                                    </span>
                                  {{ Form::input('tel', 'tel', null, ['class' => 'form-control', 'placeholder' => 'Tél']) }}
                                </div>
                                 @if($errors->has('tel'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('tel') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Année</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    {{ Form::select('year', [1=>'A1', 2=>'A2', 3=>'A3', 4=>'A4', 5=>'A5']) }}
                                </div>
                                 @if($errors->has('year'))                               
                                    <div class="alert alert-danger">
                                        {{ $errors->first('year') }}
                                    </div>
                                @endif
                            </div>
                        </div>




                   

                        <div class="form-group ">
                            
                        {{ Form::button('S\'inscrire', array('type'=>'submit','class'=>'btn btn-primary btn-lg btn-block register-button')) }}
                        </div>

                    @if(session('alert-fail'))                                    
                        <div class="alert alert-danger">
                            {{ session('alert-fail') }}
                        </div>
                    @endif

                    @if(session('alert-success'))                                    
                        <div class="alert alert-success">
                            {{ session('alert-success') }}
                        </div>
                    @endif

                    @if(session('error-name'))                                    
                        <div class="alert alert-danger">
                            {{ session('error-name') }}
                        </div>
                    @endif

{{ Form::close() }}
                    </div>
                </div>
            </div>

    
@stop
