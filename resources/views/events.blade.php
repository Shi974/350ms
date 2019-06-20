@extends('layouts.main')

@section('content')

<div clas="container" id="events_users">

    <div class="jumbotron bg-transparent rounded-0" id="no_access">
        <div class="container d-flex flex-column text-center">
            <h3 class="display-3">
                <i class="far fa-calendar-alt" alt=""></i> Evènements
                <i class="far fa-calendar-alt" alt=""></i>
            </h3>
            <!-- <p>Retrouvez tous nos tournois à venir !</p> -->
        </div>
    </div>

    <div class="container">
        <section class="d-flex flex-column">
            @foreach($events as $event)
            <article aria-label="article {{$event->jeu}}" class=" card border-light p-3 mb-5 rounded">
                <h4 class="text-center" aria-label="">{{ $event->jeu }}
                    <!-- Si Inscrit -->
                    <!-- <p class="card-text"><small class="text-success">Vous êtes inscrit à cet évènement <i class="fas fa-check"></i></small></p> -->
                    <!-- -------- -->
                </h4>

                <div class="d-flex flex-row justify-content-around w-100">

                
                    <figure>
                        <img src="/images/{{ $event->image }}" alt="Jaquette de {{ $event->jeu }}" 
                        title="Jaquette de {{ $event->jeu }}"/>
                    </figure>


                    <span class="w-75">
                        Horaire : {{$event->horaire_debut}} <br />
                        Lieu : {{ $event->lieu}} <br />
                        Nombre de places : {{ $event->nb_place}}
                    </span>
                </div>
                <div class="d-flex justify-content-around">
                    <!-- Si Inscrit -->
                    <!-- <a href="/inscription/delete/{{$event->id}}" class="btn btn-outline-danger font-weight-bold" aria-label="Lire davantage sur ce sujet">
                        Se Désinscrire
                    </a> -->
                    <!-- -------- -->
                    <a href="/events/details/{{$event->id}}" class="btn btn-outline-success font-weight-bold mt-2" aria-label="Lire davantage sur ce sujet">
                        En savoir plus
                    </a>
                </div>

            </article>
            @endforeach
        </section>
    </div>
</div>

@endsection