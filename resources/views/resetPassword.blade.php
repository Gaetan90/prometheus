@extends('layouts.default')

@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offselt-4 ogin">
			{{ Form::open(array('route' => array('users.resetPasswordPost', $token))) }}

		        <!-- Mot de passe -->
		        <div class="form-group">
		            {{ Form::label('password','Mot de passe :') }}<br />
		            {{ Form::password('password') }} 
		        </div>

		        @if($errors->has('password'))                               
                    <div class="alert alert-danger">
                        {{ $errors->first('password') }}
                    </div>
                @endif

		         <!-- Mot de passe (confirmation) -->
		        <div class="form-group">
		            {{ Form::label('password','Mot de passe (confirmation) :') }}  
		            {{ Form::password('password_confirmation') }}
		        </div>

		        <center>
		        	{{ Form::submit('Modifier', array('class'=>'btn btn-primary')) }}
		        </center>

		        <br>

		        @if(session('alert-success'))                                    
	                <div class="alert alert-success">
	                    {{ session('alert-success') }}
	                </div>
	            @endif

			{{ Form::close() }}

			<a href="{{ URL::route('index') }}">Retourner à l'accueil</a>
		</div>
	</div>
</div>
@stop