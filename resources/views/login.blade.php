@extends('layouts.default')

@section('contenu')
    
        <div class="container">
            <center>
               <div class="row">
                    <div class="col-lg-offset-4 col-lg-4">
                        <div class="login">
                            {{ Form::open(array('route'=>'users.authenticate')) }}

                                <!-- Login -->
                                <div class="form-group">
                                    {{ Form::label('email','E-mail :') }}
                                    {{ Form::text('email') }}
                                </div>

                                <!-- Mot de passe -->
                                <div class="form-group">
                                    {{ Form::label('password','Mot de passe :')}}                            
                                    {{ Form::password('password')}}
                                </div>
                                
                                <!-- Submit -->
                                {{ Form::submit('Se connecter', array('class'=>'btn btn-primary')) }}

                                @if(session('alert-fail'))                                    
                                    <div class="alert alert-danger">
                                        {{ session('alert-fail') }}
                                    </div>
                                @endif

                            {{ Form::close() }}
                        </div>
                    </div>
               </div>
           </center>
        </div>
@stop