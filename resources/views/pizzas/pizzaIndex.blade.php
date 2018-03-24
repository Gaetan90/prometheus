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
	@if(isset($orderNextFriday))
		<h1>Mes commandes</h1>
		@if(isset($successMsg))
			<div id="pizza_success" class="alert alert-success alert-dismissible text-center">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{ $successMsg }}
			</div>
		@endif
		<h3 class="text-success">Commande à venir</h3>
		<table id="commmande_a_venir" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Date commande</th>
					<th>Date livraison</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($orderNextFriday as $order)
					<tr>
						<td>{{ $order->pizza->name }}</td>
						<td>{{ $order->pizza->description }}</td>
						<td>{{ $order->pizza->price }}</td>
						<td>{{ $order->date }}</td>
						<td>{{ $order->date_livraison }}</td>
					</tr>
				@endforeach
				<tr></tr>
			</tbody>
		</table>
	@endif
	@if(isset($commandes) && $commandes->isNotEmpty())
		<h3 class="text-danger">Commandes passées</h3>
		<table id="commmandes_passees" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
					<th>Date commande</th>
					<th>Date livraison</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($commandes as $commande)
					<tr>
						<td>{{ $commande->pizza->name }}</td>
						<td>{{ $commande->pizza->description }}</td>
						<td>{{ $commande->pizza->price }}</td>
						<td>{{ $commande->date }}</td>
						<td>{{ $commande->date_livraison }}</td>
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
