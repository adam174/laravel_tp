@extends('layouts.app')

@section('content')
<div class="container"> 
  
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Il y a quelques problèmes avec votre saisie.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
   @endif
    <div class="row">
      <div class="col-10">
         <h1>Bienvenue {{$prenom}}</h1>
        <form action="{{route('personnages.store')}}" method="post">
         @csrf
         <div class="form-group">
           <label for="nom">Nom : </label>
           <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
         </div>
          <div class="form-group">
           <label for="titre">Titre : </label>
           <input type="text" class="form-control" name="titre" id="titre" placeholder="Titre">
         </div>
          <div class="form-group">
           <label for="note">Note : </label>
           <input type="number" class="form-control" name="note" id="note" placeholder="/20">
         </div>
         <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
      </div>
      <div class="col-2">
         <a class="btn btn-primary" href="{{ route('personnages.index') }}"> page précédente</a>
      </div>
    </div>
</div>
@endsection