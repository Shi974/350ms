@extends('layouts.main')

@section('content')


<div clas="container" id="events_id">

    <div class="text-center text-justify">
        <h3> Tournoi {{ $event->jeu }} </h3>
    </div>

    <div class="container">

        <div class="d-flex">
            <figure style="width:20%" class=" d-flex justify-content-center w-25">
                <img src="/images/{{ $event->image }}" alt="Jaquette de {{ $event->image }}" title="" 
                    class="events_image"/>
            </figure>
            <div>
                <strong class="strong">Date</strong> : <span>{{ $event->date }}</span> <br />
                <strong>Lieu</strong> : <span>{{ $event->lieu }}</span> <br />
            </div>
        </div>

        <p class="text-center">
                <strong>Horaire</strong> : <span>{{ $event->horaire_debut }}</span> <br />
                <strong>Durée</strong> : <span>{{ $event->duree }}</span> <br />
                <strong>Nombre de places limité à</strong> : <span>{{ $event->nb_place }}</span> <br />
                <strong>Nombre de place actuellement réservées</strong> : <span>{{ $event->nb_place_reserve }}</span> <br />
                <strong>Fermeture des inscriptions</strong> : <span>{{ $event->fin_inscription }}</span><br />
                <strong>Récompense</strong> : <span>@if( $event->recompense == null) aucune @else {{ $event->recompense }} @endif</span> <br />
                <strong>Tarif d'entrée</strong> :  <span>@if( $event->prix == null) aucun @else {{ $event->prix }} @endif</span> <br />
        </p>
        
        <div class="text-center">
            <a href="idEvent/{{ $event->id }}" class="btn btn-outline-danger font-weight-bold"g
                aria-label="Lire davantage sur ce sujet">
                s'inscrire
            </a>
        </div>

    </div>
</div>

@endsection