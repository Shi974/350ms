@extends('layouts.main')

@section('content')

<div clas="container" id="events_users">
    
    <div class="text-center text-justify">
        <h3> Liste des evènements </h3>
    </div>

    <div class="container">
        <section class="d-flex flex-column">
            @foreach($events as $event)
            <article aria-label="article {{$event->jeu}}" class=" card border-light p-3 mb-5 rounded">
                <h4 class="text-center" aria-label="">Joueur inscrits a l'évènement {{ $event->jeu }}
                </h4>

                <div class="d-flex flex-row justify-content-aroun w-100">
                
                    <figure style="width:20%" class="w-25">
                        <img src="/images/{{ $event->image }}" alt="Jaquette de {{ $event->jeu }}" 
                        title="Jaquette de {{ $event->jeu }}"/>
                    </figure>
                    @for ($i = 0; $i < count($event->users); $i++)
                        - {{ $event->users[$i]->pseudo}}
                    @endfor
                </div>

            </article>
            @endforeach
        </section>
    </div>
</div>

@endsection