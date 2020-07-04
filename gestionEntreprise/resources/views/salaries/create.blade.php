@extends('master')

@section('Content')


<form method="post" action = "{{route('salarie.store')}}" 
enctype="multipart/form-data">
	@csrf
	<div class="form-group" >
		Nom : <input type="text" name="nom" class="form-control mb-4">
		Prénom: <input type="text" name="prenom" class="form-control mb-4">	
		email: <input type="text" name="email" class="form-control mb-4">	
		dateRecrutement: <input type="date" name="dateRecrutement" class="form-control mb-4">	
		
		<input type="submit" value="Valider" class="btn btn-success mb-4">
	</div>
</form>

@stop