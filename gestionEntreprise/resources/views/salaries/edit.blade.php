@extends('master')

@section('Content')


<form method="post" action = "{{route('salarie.update', $salarie)}}" 
enctype="multipart/form-data">
  @csrf
  @method('PATCH')
	<div class="form-group" >
  Nom : <input type="text" name="nom" class="form-control mb-4" value="{{$salarie->nom}}">
		Prénom: <input type="text" name="prenom" class="form-control mb-4" value="{{$salarie->prenom}}">	
		email: <input type="text" name="email" class="form-control mb-4" value="{{$salarie->email}}">	
		dateRecrutement: <input type="date" name="dateRecrutement" class="form-control mb-4" value="{{$salarie->dateRecrutement}}">	
		
		<input type="submit" value="Valider" class="btn btn-success mb-4">
	</div>
</form>

@stop