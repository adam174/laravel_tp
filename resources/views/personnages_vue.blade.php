@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="row">
    <div class="col-10"><h1>Bienvenue {{$prenom}}</h1></div>
    <div class="col-2">
    <div class="right"><a name="" id="" class="btn btn-info" href="/personnages/create" role="button">Ajouter</a></div>
    </div>
  </div>
  <table class="table ">
    <thead>
      <tr class="text-light bg-dark">
        <th>Nom</th>
        <th>Titre</th>
        <th>Note</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        <th>Voir</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($personnages as $personnage)
          <tr class="text-white bg-secondary">
            <td>{{$personnage->nom}}</td>
            <td>{{$personnage->titre}}</td>
            <td class="bg-info text-dark">{{$personnage->note ? $personnage->note ."/20" : "0/20"}}</td>
             <td><a href="/personnages/{{ $personnage->id }}/edit" class="btn btn-sm btn-success">Modifier</a></td>
                <form action="{{ route('personnages.destroy', $personnage->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
               <td> <button type="submit" class="btn btn-sm btn-danger">Suprimer</button></td>  
                </form>
               <td><a name="" id="" class="btn btn-sm btn-primary" href="/personnages/{{$personnage->id}}" role="button">Voir details</a></td>
          </tr>
       @endforeach
      
      
    </tbody>
  </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
</div>
@endsection
