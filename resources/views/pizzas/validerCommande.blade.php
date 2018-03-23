@extends('layouts.default')
	
@section('contenu')
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
	<a href="{{ route('users.enregistrercommande', $pizza->id) }}" class="btn btn-primary btn-lg btn-block">Valider ma commande</a>
	<a href="{{ route('users.pizza') }}" class="btn btn-danger btn-lg btn-block">Annuler</a>
@stop