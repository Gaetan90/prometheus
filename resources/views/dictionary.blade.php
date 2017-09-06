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
                                {{ Form::label('title','Titre :') }}
                                {{ Form::text('title') }}
                            </div>

                            <!-- Definition -->
                            <div class="form-group">
                                {{ Form::label('definition','Definition :')}}<br />                            
                                {{ Form::textarea('definition', null, ['size' => '30x5'])}}
                            </div>

                            <!-- Source -->
                            <div class="form-group">
                                {{ Form::label('source','Source :') }}
                                {{ Form::text('source') }}
                            </div>                                

                            <!-- Category -->
                            <div class="form-group">
                                {{ Form::label('category','Catégorie :') }}
                                {{ Form::select('category', $categories, Input::old('category')) }}
                            </div>
                        </div>

                        <!-- Submit -->
                        {{ Form::submit('Envoyer', array('class'=>'btn btn-primary')) }}
                 		<br><br>
                                
                        @if(session('alert-fail'))                                    
                            <div class="alert alert-danger">
                                {{ session('alert-fail') }}
                            </div>
                        @endif

                         @if(session('alert-droits'))                                    
                            <div class="alert alert-danger">
                                {{ session('alert-droits') }}
                            </div>
                        @endif

                        @if(session('alert-success'))                                    
                            <div class="alert alert-success">
                               {{ session('alert-success') }}
                            </div>
                        @endif

                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </center>
</div>
@stop
