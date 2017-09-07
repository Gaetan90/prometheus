@extends('layouts.default')

@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 login">
			{{ Form::open(array('route'=>'users.askResetPasswordPost')) }}

		        <!-- Mot de passe -->
		        <div class="form-group">
		            {{ Form::label('lastname','Nom :') }}<br />
		            {{ Form::text('lastname') }} 
		        </div>

		        @if($errors->has('lastname'))                               
                    <div class="alert alert-danger">
                        {{ $errors->first('lastname') }}
                    </div>
                @endif

		         <!-- Mot de passe (confirmation) -->
		        <div class="form-group">
		            {{ Form::label('firstname','Prénom :') }}  
		            {{ Form::text('firstname') }}
		        </div>

		        @if($errors->has('firstname'))                               
                    <div class="alert alert-danger">
                        {{ $errors->first('firstname') }}
                    </div>
                @endif

		        <center>
		        	{{ Form::submit('Envoyer le mail', array('class'=>'btn btn-primary')) }}
		        </center>

		        <br>

		        @if(session('alert-success'))                                    
	                <div class="alert alert-info">
	                    {{ session('alert-success') }}
	                </div>
	            @endif

	             @if(session('account-error'))                                    
	                <div class="alert alert-danger">
	                    {{ session('account-error') }}
	                </div>
	            @endif

			{{ Form::close() }}
		</div>
	</div>
</div>
@stop