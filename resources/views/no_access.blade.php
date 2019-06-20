@extends('layouts.main')
@section('content')

<div class="jumbotron bg-danger text-white rounded-0" id="no_access">
    <div class="container">
        <h3 class="display-3 text-white">Accès refusé</h3>
        <p>Droits insuffisants pour accéder à la page demandée.<p>
    </div>
</div>

<hr>

<div class="row justify-content-md-center">
    <a href="/welcome"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
</div>

@stop