@extends('layouts.main')
{{-- j'ai changé le layout app en main --}}

@section('content')
<div class="container">
    <div class="jumbotron bg-transparent text-white rounded-0" id="no_access">
        <div class="container d-flex flex-column text-center">
            <h3 class="display-3 text-success"><i class="fas fa-trophy"></i> Succès débloqué !
                <i class="fas fa-trophy"></i></h3>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="alert alert-success text-center" role="alert">
                    GG ! Vous êtes connecté !
                </div>
            </div>
        </div>

        <hr>

        <div class="row justify-content-md-center">
            <a href="/"><button type="button" class="btn btn-primary">Retourner à l'accueil</button></a>
        </div>

    </div>
</div>
    @endsection
