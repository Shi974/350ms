@extends('layouts.main')


@section('content')


<div clas="container" id="events_users">

    <div class="text-center text-justify">
        <h3> Tournois {{ $event->jeu }} </h3>
    </div>

    <div class="container">

        <figure style="width:20%" class=" d-flex justify-content-center w-25">
            <img src="/images/{{ $event->image }}" alt="" title="" />
        </figure>


        <p class="text-center">
                Lieu: {{$event->lieu }} <br />
                Horaire: {{$event->horaire_debut }} <br />
                Durée: {{$event->duree }} <br />
                Nombre de places limitée à: {{ $event->nb_place }} <br />
                Nombre de place actuellement réservées: {{ $event->nb_place_reserve }} <br />
                Date de fin d'inscription: {{ $event->fin_inscription }}<br />
                Récompense: {{ $event->recompense }} <br />
                Prix de participation: {{ $event->prix }}<br />
        </p>
        
        <div class="d-flex justify-content-end">
            <a href="idEvent/{{ $event->id }}" class="btn btn-outline-danger font-weight-bold"
                aria-label="Lire davantage sur ce sujet">
                s'inscrire
            </a>
        </div>


    </div>
</div>

@endsection
