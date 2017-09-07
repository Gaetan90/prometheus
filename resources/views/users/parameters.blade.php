@extends('layouts.default')

@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 login">
			{{ Form::model($user, ['route' => 'users.parameters.edit']) }}

		        <!-- Téléphone -->
		        <div class="form-group">
		            {{ Form::label('tel','Téléphone :') }}                            
		            {{ Form::text('tel', $user->tel) }}
		        </div>

		        @if($errors->has('tel'))                               
                        <div class="alert alert-danger">
                            {{ $errors->first('tel') }}
                        </div>
                    @endif

		        <!-- Année -->
		        <div class="form-group">
		            {{ Form::label('year','Année :') }}  
		            {{ Form::select('year', [1=>'A1', 2=>'A2', 3=>'A3', 4=>'A4', 5=>'A5'], $user->annee) }}                          
		        </div>

		        @if($errors->has('year'))                               
                    <div class="alert alert-danger">
                        {{ $errors->first('year') }}
                    </div>
                @endif	

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
		</div>
	</div>
</div>
@stop