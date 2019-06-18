@extends('layouts.main')
@section('content')

<div class="jumbotron bg-primary text-white rounded-0">
    <div class="container">
        <h1 class="display-3">Evènements</h1>
        <p>Gestion des évènements.<p>
    </div>
</div>

<hr>

<div class="container-fluid">
<span>Il y actuellement {{ count($events) }} @if (count($events) > 1)évènements @else évènement @endif dans la base de données.</span>
<hr>
    <table class="table table-bordered table-dark">
        <thead class="text-center">
            <tr>
                <th scope="col">Jeu</th>
                <th scope="col">Date</th>
                <th scope="col">Lieu</th>
                <th scope="col">Horaire</th>
                <th scope="col">Durée</th>
                <th scope="col">Nombre de places</th>
                <th scope="col">Places réservées</th>
                <th scope="col">Fin des inscriptions</th>
                <th scope="col">Récompense</th>
                <th scope="col">Prix d'entrée</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $event->jeu }}</th>
                    <td> {{ $event->date}} </td>
                    <td class="text-center"> {{$event->lieu }} </td>
                    <td class="text-center"> {{$event->horaire_debut }} </td>
                    <td class="text-center"> {{$event->duree }} </td>
                    <td class="text-center"> {{ $event->nb_place }} </td>
                    <td class="text-center"> {{ $event->nb_place_reserve }} </td>
                    <td class="text-center"> {{ $event->fin_inscription }} </td>
                    <td class="text-center"> {{ $event->recompense }} </td>
                    <td class="text-center"> {{ $event->prix }} </td>
                    <td class="text-center">
                        <a href="/admin/events/edit/{{ $event->id}}">
                            <button type="button" class="btn btn-warning">Modifier</button>
                        </a>
                        <a href="/admin/events/delete/{{ $event->id }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet évènement ?')">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<hr>

<div class="text-center">
    <a href="/admin/event/new"><button type="button" class="btn btn-primary">Ajouter un évènement</button></a>
</div>
@stop