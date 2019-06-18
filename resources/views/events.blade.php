@extends('layouts.main')

@section('content')

<div clas="container" id="events_users">
    
    <div class="text-center text-justify">
        <h2> Evènements </h2>
    </div>

    <div class="container">
        <section class="d-flex flex-column">
            @foreach($events as $event)
            <article aria-label="article {{$event->jeu}}" class=" card border-light p-3 mb-5 rounded">
                <h4 class="text-center d" aria-label="">{{ $event->jeu }}</h4>

                <div class="d-flex flex-row justify-content-aroun w-100">
                    <figure style="width:20%" class="w-25">
                        <img src="/images/{{ $event->image }}" alt="" title="" />
                    </figure>
                    <span class="w-75">
                        Horaire: {{$event->horaire_debut}} <br />
                        Lieu : {{ $event->lieu}} <br />
                        Nombre de place : {{ $event->nb_place}}
                    </span>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-outline-danger" aria-label="Lire davantage sur ce sujet">En savoir
                        plus
                    </a>
                </div>

            </article>
            @endforeach
        </section>
    </div>
</div>

@endsection