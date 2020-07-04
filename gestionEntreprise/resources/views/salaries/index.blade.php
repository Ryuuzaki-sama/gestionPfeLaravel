@extends('layouts/app')

@section('content')

@if(Session::has('statut'))
  <div class="alert alert-{{Session::get('couleur')}}">
    {{Session::get('statut')}}
  </div>
@endif


<h1>Liste des salaries</h1>
@auth
<a href="{{route('salarie.create')}}">
  <button class="btn btn-success">Nouveau Salarie</button>
</a>  
@endauth
	<table class="table table-striped table-hover mt-4">
        <thead class="table table-dark">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Entreprise</th>
                <th></th>
            </tr>
        </thead>        
	@foreach($salaries as $salarie)
		<tr>
			<td width="20%">{{$salarie->nom}}</td>
			<td width="20%">{{$salarie->prenom}}</td>
			<td width="20%">{{$salarie->entreprise->denomination}}</td>
			
			<td width="40%">	
        <div class="flex">
          @auth
            <a href="{{route('salarie.edit',$salarie)}}">
              <button class="btn btn-outline-primary ml-2" >Modifier</button>
            </a>
              
              <form action="{{route('salarie.destroy', $salarie)}}" method="post">
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