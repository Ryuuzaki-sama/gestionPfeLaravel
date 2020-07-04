@extends('master')

@section('Content')


<form method="post" action = "{{route('entreprise.store')}}" 
enctype="multipart/form-data">
	@csrf
	<div class="form-group" >
		Denomination : <input type="text" name="denomination" class="form-control mb-4">
		Slogon: <input type="text" name="slogon" class="form-control mb-4">
		
		<input type="submit" value="Valider" class="btn btn-success mb-4">
	</div>
</form>

@stop