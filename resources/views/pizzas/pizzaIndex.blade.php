@extends('layouts.default')
	
@section('contenu')
	@if(isset($pizzas))
		{{ Form::open(['route'=>'users.validercommande']) }}
		<h1>Commande pizza </h1>
		@if(isset($alerte))
			<div id="pizza_error" class="alert alert-danger alert-dismissible text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{ $alerte }}
			</div>
		@endif
			<table id="commmande" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
						<th>Prix</th>
						<th width="10px">Commande</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($pizzas as $pizza)
						<tr>
							<td>{{ $pizza->name }}</td>
							<td>{{ $pizza->description }}</td>
							<td>{{ $pizza->price }}</td>
							<td>
								<div class="form-check">
									{{ Form::radio('idpizza', $pizza->id, false,array('class'=>'form-check-input pizza_radio')) }} 
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ Form::button('Commander', array('id'=>'submit_commande','type'=>'submit','class'=>'btn btn-primary btn-lg btn-block', 'disabled'=>'disabled')) }}
		{{ Form::close() }}
	@endif
	@if(isset($commandes))
		<h1>Mes commandes</h1>
		@if(isset($successMsg))
			<div id="pizza_success" class="alert alert-success alert-dismissible text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{ $successMsg }}
			</div>
		@endif
		<table id="commmande" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Date commande</th>
					<th>Date livraison</th>
					<th>User</th>
					<th>Annee</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($commandes as $comande)
					<tr>
						<td>{{ $comande->pizza->name }}</td>
						<td>{{ $comande->pizza->description }}</td>
						<td>{{ $comande->pizza->price }}</td>
						<td>{{ $comande->date }}</td>
						<td>{{ $comande->date_livraison }}</td>
						<td>{{ $comande->user->nom }} {{ $comande->user->prenom }}</td>
						<td>A{{ $comande->user->annee }}</td>
					</tr>
				@endforeach
				<tr></tr>
			</tbody>
		</table>
	@endif
<script>
$(document).on("click", ".pizza_radio", function() {
	$('#submit_commande').removeAttr('disabled');
	$('#pizza_error').addClass("hidden");
});
</script>
@stop
