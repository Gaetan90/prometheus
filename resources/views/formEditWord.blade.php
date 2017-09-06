@extends('layouts.default')
@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
           {{ Form::model($word, array('route' => array('users.dictionary.editWord', $word->id))) }}
           		<div class="panel panel-primary">
                    <!-- Titre -->
                    <div class="form-group">
                        {{ Form::label('title','Titre :') }}
                        {{ Form::text('title') }}
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

                    <!-- Category -->
                    <div class="form-group">
                        {{ Form::label('category','Catégorie :') }}
                        {{ Form::select('category', $categories, $word->id_category) }}
                    </div>
                </div>

                <!-- Submit -->
                {{ Form::submit('Modifier', array('class'=>'btn btn-primary')) }}
                <br><br>

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
           {{ Form::close() }}
        </div>
    </div>
</div>
@stop