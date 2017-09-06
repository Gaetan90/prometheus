@extends('layouts.default')

@section('contenu')
    <div class="container">
        <br />
        <div class="row">
            <div class="col-md-offset-4 col-lg-offset-4 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                {{ Form::open(array('route'=>'users.signUp')) }}

                    {{ Form::text('lastname', '', array('placeholder'=>'Nom', 'style'=>'width:90%;height:4vh')) }}

                    @if($errors->has('lastname'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('lastname') }}
                        </div>
                    @endif

                    {{ Form::text('firstname', '', array('placeholder'=>'Prénom', 'style'=>'width:90%;height:4vh')) }}

                    @if($errors->has('firstname'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('firstname') }}
                        </div>
                    @endif

                    {{ Form::text('email', '', array('placeholder'=>'E-mail', 'style'=>'width:90%;height:4vh')) }}

                    @if($errors->has('email'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                     
                    {{ Form::password('password', array('placeholder'=>'Mot de passe', 'style'=>'width:90%;height:4vh')) }}

                    @if($errors->has('password'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('password') }}
                        </div>
                    @endif

                    {{ Form::password('password_confirmation', array('placeholder'=>'Mot de passe (confirmation)', 'style'=>'width:90%;height:4vh')) }}

                    <br />
                    F &nbspM<br /> {{ Form::radio('sexe', 'Féminin') }} {{ Form::radio('sexe', 'Masculin') }}

                    @if($errors->has('sexe'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('sexe') }}
                        </div>
                    @endif

                    {{ Form::input('tel', 'tel', null, ['class' => 'form-control', 'placeholder' => 'Tél']) }}

                    @if($errors->has('tel'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('tel') }}
                        </div>
                    @endif

                    <br />

                    <!-- Année -->
                    <div class="form-group">
                        {{ Form::label('year','Année :') }}
                        {{ Form::select('year', [1=>'A1', 2=>'A2', 3=>'A3', 4=>'A4', 5=>'A5']) }}
                    </div>

                    @if($errors->has('year'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('year') }}
                        </div>
                    @endif

                    {{ Form::submit('S\'inscrire', array('class'=>'btn btn-default', 'style'=>'margin-top:30px;width:100%; background-color: #AA1111;border-style:none;color:#FFFFFF;text-transform:uppercase;font-weight:bold;')) }}
                    
                    @if(session('alert-fail'))                                    
                        <div class="alert alert-danger">
                            {{ session('alert-fail') }}
                        </div>
                    @endif

                    @if(session('alert-success'))                                    
                        <div class="alert alert-info">
                            {{ session('alert-success') }}
                        </div>
                    @endif

                    @if(session('error-name'))                                    
                        <div class="alert alert-danger">
                            {{ session('error-name') }}
                        </div>
                    @endif
                {{ Form::close() }}

                <br /><br />
            </div>
        </div>
    </div>
@stop