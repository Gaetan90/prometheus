@extends('layouts.default')
	
@section('contenu')
	<h1>Valider Commande pizza </h1>
			<p>{{ $commande->date_livraison }}</p>
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
						<td>{{ $commande->pizza->name }}</td>
						<td>{{ $commande->pizza->description }}</td>
						<td>{{ $commande->pizza->price }}</td>
					</tr>
					
				</tbody>
			</table>
@stop