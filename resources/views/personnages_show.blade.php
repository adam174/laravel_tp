@extends('layouts.app')

@section('content')
<div class="container"> 
  <div class="row">
     <div class="col-10"><h1>Bienvenue {{$prenom}}</h1></div>
     <div class="col-2"> <a class="btn btn-primary" href="{{ route('personnages.index') }}"> page précédente</a></div>
  </div>
<div class="row">
   <div class="col-10">
      <table class="table">
         <thead>
            <tr>
               <th>Nom</th>
               <th>Titre</th>
               <th>Note</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>{{ $personnage->nom }}</td>
               <td>{{$personnage->titre}}</td>
            <td>{{$personnage->note}}</td>
            </tr>
         </tbody>
      </table>


   </div>
</div>
</div>
@endsection