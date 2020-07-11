@extends('layouts.app')

@section('content')
<div class="container"> 
   <h1>Bienvenue {{$prenom}}</h1>
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
      <form action="{{route('personnages.store')}}" method="post">
         @csrf
         <div class="form-group">
           <label for="nom">Nom : </label>
           <input type="text" class="form-control" name="nom" id="nom" placeholder="nom">
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
</div>
@endsection