@extends('layouts.main')

@section('content')
<div class="container justify-content-center">

    <div class="d-flex justify-content-center mt-5 img">
        <img src="/img/logo_concours1.png" alt="logo de l'événement" class="m-5">
    </div>

    <div class="d-flex justify-content-around mt-5 resp">
        <a href="/admin/events"><button type="button" class="btn btn-primary btn-lg">Gérer les évènements</button></a>
        <a href="/admin/suggestions"><button type="button" class="btn btn-primary btn-lg">Voir les suggestions</button></a>
    </div>

</div>
@endsection