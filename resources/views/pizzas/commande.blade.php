@extends('layouts.default')
	
@section('contenu')
	<h1>Commande pizza </h1>
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
								{{ Form::radio('pizza', $pizza->id, false,array('class'=>'form-check-input')) }} 
							</div>
						</td>

						<!-- <td>{{ Form::number($pizza->id, '', array('placeholder'=>'Nombre', 'class'=>'form-control','min'=>'0')) }}</td> -->
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ Form::button('Valider', array('type'=>'submit','class'=>'btn btn-primary btn-lg btn-block')) }}
	{{ Form::close() }}

@stop