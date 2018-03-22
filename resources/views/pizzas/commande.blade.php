@extends('layouts.default')
	
@section('contenu')
	<h1>Commande pizza </h1>
	@if(isset($alerte))
		<p id="pizza_error" class="alert alert-danger text-center">{{ $alerte }}</p>
	@endif
	{{ Form::open(array('route'=>'users.pizza')) }}
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
								{{ Form::radio('pizza', $pizza->id, false,array('class'=>'form-check-input pizza_radio')) }} 
							</div>
						</td>
						<!-- <td>{{ Form::number($pizza->id, '', array('placeholder'=>'Nombre', 'class'=>'form-control','min'=>'0')) }}</td> -->
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ Form::button('Commander', array('id'=>'submit_commande','type'=>'submit','class'=>'btn btn-primary btn-lg btn-block', 'disabled'=>'disabled')) }}
	{{ Form::close() }}
<script>
$(document).on("click", ".pizza_radio", function() {
	$('#submit_commande').removeAttr('disabled');
	$('#pizza_error').addClass("hidden");
});
</script>
@stop
