@extends('layouts.default')
@section('contenu')
<div class="container">
            <center>
               <div class="row">
                    <div class="col-lg-offset-4 col-lg-4">
                        <div class="login">
                            {{ Form::open(array('route'=>'users.dictionary.valid')) }}
                            	<div class="panel panel-primary">
                                <!-- Titre -->
                                <div class="form-group">
                                    {{ Form::label('titre','Titre :') }}
                                    {{ Form::text('titre') }}
                                </div>

                                <!-- Definition -->
                                <div class="form-group">
                                    {{ Form::label('definition','Definition :')}}                            
                                    {{ Form::textarea('definition')}}
                                </div>

                                <!-- Source -->
                                <div class="form-group">
                                    {{ Form::label('source','Source :') }}
                                    {{ Form::text('source') }}
                                </div>
                                </div>
                                <!-- Submit -->
                                {{ Form::submit('Envoyer', array('class'=>'btn btn-primary')) }}

                 				<div>
                 					<br>
                 				</div>
                                
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
