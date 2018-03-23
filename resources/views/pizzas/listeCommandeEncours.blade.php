@extends('layouts.default')
	
@section('contenu')
	<h1>Liste commandes pizza pour le {{ date("d/m/Y",strtotime('next friday')) }}</h1>

		<table id="commmande" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Nom</th>
					<th>Description</th>
					<th>Prix</th>
					<th>User</th>
					<th>Annee</th>
					<th>Salle</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($commandes as $comande)
					<tr>
						<td>{{ $comande->pizza->name }}</td>
						<td>{{ $comande->pizza->description }}</td>
						<td>{{ $comande->pizza->price }}</td>
						<td>{{ $comande->user->nom }} {{ $comande->user->prenom }}</td>
						<td>A{{ $comande->user->annee }}</td>
						<td>/* En cours */</td>
						<td><button type="button" class="btn btn-danger btn-delete-commande" data-toggle="modal" data-target="#deleteCommande" idCommande="{{$comande->id}}">Delete</button></td>
					</tr>
				@endforeach
				<tr></tr>
			</tbody>
		</table>
		<div class="modal fade" id="deleteCommande" role="dialog">
		    <div class="modal-dialog">
		    
		      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title">Supprimer Commande</h4>
			        </div>
			        	{{ Form::open(array('route'=>'users.deleteCommande')) }}
					        <div class="modal-body">
					       		<input type="hidden" name="idCommande" id="idCommande">
					          <p>Etes vous sure de vouloir supprimer cette commande ?</p>
					        </div>
					        <div class="modal-footer">
					        	{{ Form::button('Confirmer', array('id'=>'delete_commande','type'=>'submit','class'=>'btn btn-default')) }}
					          	<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        </div>
				    	{{ Form::close() }}
			      </div>
		      
		    </div>
		 </div>

		<script type="text/javascript">
			$('.btn-delete-commande').on("click",function(){

				var idCommande = $(this).attr("idCommande");
				$('#idCommande').val(idCommande);
			});
			
		</script>
@stop
