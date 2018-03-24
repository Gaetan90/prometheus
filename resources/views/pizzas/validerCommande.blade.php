@extends('layouts.default')
	
@section('contenu')
	{{ Form::open(['route'=>'users.enregistrercommande']) }}
		<h1>Valider Commande pizza </h1>
				<table id="commmande" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nom</th>
							<th>Description</th>
							<th>Prix</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>{{ $pizza->name }}</td>
							<td>{{ $pizza->description }}</td>
							<td>{{ $pizza->price }}</td>
						</tr>
					</tbody>
				</table>
		{{ Form::hidden('idpizza', '$pizza->id') }}		
		{{ Form::button('Valider ma commande', array('id'=>'confirm_commande','type'=>'submit','class'=>'btn btn-primary btn-lg btn-block')) }}
	{{ Form::close() }}
	<a href="{{ route('users.pizza') }}" class="btn btn-danger btn-lg btn-block">Annuler</a>
@stop