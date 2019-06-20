@extends('layouts.main')

@section('content')

<div clas="container" id="events_users">
    
    <div class="text-center text-justify">
        <h3> Evènements </h3>
    </div>

    <div class="container">
        <section class="d-flex flex-column">
            @foreach($events as $event)
            <article aria-label="article {{$event->jeu}}" class=" card border-light p-3 mb-5 rounded">
                <h4 class="text-center" aria-label="">{{ $event->jeu }}
                    <!-- Si Inscrit -->
                    <p class="card-text"><small class="text-success">Vous êtes inscrit à cette evènement <i class="fas fa-check"></i></small></p>
                    <!-- -------- -->
                </h4>

                <div class="d-flex flex-row justify-content-aroun w-100">

                
                    <figure style="width:20%" class="w-25">
                        <img src="/images/{{ $event->image }}" alt="Jaquette de {{ $event->jeu }}" 
                        title="Jaquette de {{ $event->jeu }}"/>
                    </figure>


                    <span class="w-75">
                        Horaire : {{$event->horaire_debut}} <br />
                        Lieu : {{ $event->lieu}} <br />
                        Nombre de places : {{ $event->nb_place}}
                    </span>
                </div>
                <div class="d-flex justify-content-between">
                    <!-- Si Inscrit -->
                    <a href="/inscription/delete/{{$event->id}}" class="btn btn-outline-danger font-weight-bold" aria-label="Lire davantage sur ce sujet">
                        Se Désinscrire
                    </a>
                    <!-- -------- -->
                    <a href="/events/details/{{$event->id}}" class="btn btn-outline-danger font-weight-bold" aria-label="Lire davantage sur ce sujet">
                        En savoir plus
                    </a>
                </div>

            </article>
            @endforeach
        </section>
    </div>
</div>

@endsection