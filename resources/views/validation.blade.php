@extends('layouts.main')

@section('content')

<div class="jumbotron bg-transparent text-white rounded-0" id="no_access">
  <div class="container d-flex flex-column text-center">
    <h3 class="display-3 text-white"><i class="fas fa-trophy"></i> Succès débloqué !
     <i class="fas fa-trophy"></i></h3>
    <div class="alert alert-success text-center" role="alert">
      Votre formulaire à bien été envoyé !
    </div>
  </div>
</div>

<hr>

<div class="row justify-content-md-center">
    <a href="/"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
</div>

@endsection