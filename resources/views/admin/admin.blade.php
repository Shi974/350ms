@extends('layouts.main')

@section('content')
<div class="container justify-content-center">

    <div class="d-flex justify-content-around mt-5 resp">
        <a href="/admin/events"><button type="button" class="btn btn-primary btn-lg">Gérer les évènements</button></a>
        <a href="/admin/suggestions"><button type="button" class="btn btn-primary btn-lg">Voir les suggestions</button></a>
        <a href="/admin/joueurs_events"><button type="button" class="btn btn-primary btn-lg">Liste des joueurs inscrits</button></a>
    </div>

    <div class="d-flex justify-content-center mt-5 img">
        <img src="/images/link.gif" alt="personnage animé" class="mt-5">
    </div>

</div>
@endsection