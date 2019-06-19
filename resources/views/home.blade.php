@extends('layouts.main') 
{{-- j'ai changé le layout app en main --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Connexion réussie</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="alert">
                        GG ! Vous êtes connecté !
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
