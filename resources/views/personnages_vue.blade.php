@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h1>Bienvenue {{$prenom}}</h1>
      <ul>
      @foreach ($personnages as $personnage)     
      <li>{{$personnage->nom}}  : {{$personnage->titre}}  : {{$personnage->note ? $personnage->note ."/20" : "0/20"}}</li>       
      @endforeach
      </ul>
    </div>
</div>
@endsection
