@extends('layouts.main')

@section('content')

<hr>

<div class="container-fluid">
<hr>
    <table class="table table-bordered table-dark">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Auteur</th>
                <th scope="col">Titre</th>
                <th scope="col">Message</th>
                <th scope="col">Modification</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suggestions as $suggestion)
                <tr>
                    <th scope="row">{{ $suggestion->id}}</th>
                    <td class="text-center"> {{$suggestion->user->firstname }} </td>
                    <td class="text-center"> {{$suggestion->titre }} </td>
                    <td class="text-center"> {{$suggestion->message}} </td>
                    <td class="text-center">
                        <a href="/suggestions/destroy/{{ $suggestion->id }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette suggestion ?')">
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<hr>
@endsection