@extends('layouts/app')


@section('content')

@if(Session::has('statut'))
  <div class="alert alert-{{Session::get('couleur')}}">
    {{Session::get('statut')}}
  </div>
@endif

<h1>Liste des entreprises</h1>
@auth
<a href="{{route('entreprise.create')}}">
  <button class="btn btn-success">Nouvelle entreprise</button>
</a>
@endauth 

	<table class="table table-striped table-hover mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Denomination</th>
                <th>Slogon</th>
                <th></th>
            </tr>
        </thead>        
        
	@foreach($entreprises as $entreprise)
		<tr>
			<td width="25%">{{$entreprise->denomination}}</td>
			<td width="25%">{{$entreprise->slogon}}</td>
			
			<td width="40%">	
        <div class="flex">
          @auth
        <a href="{{route('entreprise.edit',$entreprise)}}">
          <button class="btn btn-outline-primary ml-2" >Modifier</button>
        </a>
          
          <form action="{{route('entreprise.destroy', $entreprise)}}" method="post">
          @csrf
          @method('DELETE')

          <button class="btn btn-outline-danger ml-2">Supprimer</button>
          </form>
          @endauth
					<button class="btn btn-outline-info  ml-2">Détails</button>						
          </div>			
			</td>
		</tr>
	@endforeach
	</table>

@stop