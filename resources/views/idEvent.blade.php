@extends('layouts.main')

@section('content')


<div clas="container" id="events_id">

    <div class="text-center text-justify">
        <h3> Tournoi {{ $event->jeu }} </h3>
    </div>

    <div class="container d-flex flex-column text-center align-content-center">
        <div class="d-flex row justify-content-between">
            <img src="/images/{{ $event->image }}" alt="Jaquette de {{ $event->image }}" title="" class="events_image"/>
            <p>
                <strong class="strong mt-5">Date</strong> : <span>{{ $event->date }}</span> <br />
                <strong>Lieu</strong> : <span>{{ $event->lieu }}</span> <br />
            </p>
            <span></span>
            <span></span>
        </div>
    
        <p class="text-center mt-2">
                <strong>Horaire</strong> : <span>{{ $event->horaire_debut }}</span> <br />
                <strong>Durée</strong> : <span>{{ $event->duree }}</span> <br />
                <strong>Nombre de places limité à</strong> : <span>{{ $event->nb_place }}</span> <br />
                <strong>Nombre de place actuellement réservées</strong> : <span>@if( $event->nb_place_reserve == null) aucune 
                    @else {{ $event->nb_place_reserve }} @endif</span> <br />
                <strong>Fermeture des inscriptions</strong> : <span>{{ $event->fin_inscription }}</span><br />
                <strong>Récompense</strong> : <span>@if( $event->recompense == null) aucune @else {{ $event->recompense }} @endif</span> <br />
                <strong>Tarif d'entrée</strong> :  <span>@if( $event->prix == null) aucun @else {{ $event->prix }} € @endif</span> <br />
        </p>
        
        <div class="d-flex justify-content-center">
            <a href="idEvent/{{ $event->id }}" class="btn btn-outline-danger font-weight-bold" aria-label="Lire davantage sur ce sujet">
                S'inscrire
            </a>
        </div>

    </div>
</div>
@endsection