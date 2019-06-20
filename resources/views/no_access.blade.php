@extends('layouts.main')
@section('content')

<div class="jumbotron bg-danger text-white rounded-0" id="no_access">
    <div class="container">
        <h3 class="display-3 text-white"><i class="fas fa-skull"></i> Game Over ! <i class="fas fa-skull"></i></h3>
        <p>Accès refusé ! Vos droits sont insuffisants pour accéder à la page demandée.<p>
    </div>
</div>

<hr>

<div class="row justify-content-md-center">
    <a href="/welcome"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
</div>

@stop