@extends('layouts.default')

@section('contenu')
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4 login">
			{{ Form::model($user, ['route' => 'users.parameters.edit']) }}

		        <!-- Téléphone -->
		        <div class="form-group">
		            {{ Form::label('tel','Téléphone :') }}                            
		            {{ Form::text('tel', '0'.$user->tel) }}
		        </div>

		        <!-- Année -->
		        <div class="form-group">
		            {{ Form::label('annee','Année :') }}  
		            {{ Form::select('annee', [1=>'A1', 2=>'A2', 3=>'A3', 4=>'A4', 5=>'A5'], $user->annee) }}                          
		            
		        </div>

		        <center>
		        	{{ Form::submit('Modifier', array('class'=>'btn btn-primary')) }}
		        </center>

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