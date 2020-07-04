@extends('master')

@section('Content')


<form method="post" action = "{{route('entreprises.update', $entreprise)}}" 
enctype="multipart/form-data">
  @csrf
  @method('PATCH')
	<div class="form-group" >
		Denomination : <input type="text" name="denomination" class="form-control mb-4" value="{{$entreprise->denomination}}">
		Slogon: <input type="text" name="slogon" class="form-control mb-4" value="{{$entreprise->slogon}}">	
	
		<input type="submit" value="Valider" class="btn btn-success mb-4">
	</div>
</form>

@stop