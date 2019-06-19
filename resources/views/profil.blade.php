@extends('layouts.main')


@section('content')

<div class="profil text-center">

    <h3>Page Profil de {{ $users->pseudo }}</h3>
    <img src="/storage/{{ auth()->user()->avatar }}" alt="avatar">

</div>



<div class="container row d-flex justify-content-around align-items-center">
    <div class="contenu">

        <div class="text-center">
            
            <h4 class="font-weight-bold">Prenom :</h4> {{ $users->firstname }}

            <h4 class="font-weight-bold">Nom :</h4>{{ $users->lastname }}

            <h4 class="font-weight-bold">Email :</h4> {{ $users->email }}

            <h4 class="font-weight-bold">Téléphone : </h4>{{ $users->phone }}

            <h4 class="font-weight-bold">Pseudo : </h4>{{ $users->pseudo }}

        </div>



        <div class="modif text-center">
            <a href="/user/edit/{{}}" role="button" class=" btn btn-outline-success">Modifier<a>
        </div>
    </div>
    <div class="addAvatar">
        <form class="section" action="/ajout_avatar" method="post" enctype="multipart/form-data">
            @csrf

            <div class="field">
                <label class="label"> Ajouter/Modifier mon avatar : </label>
                <div class="control">
                    <input class="input" type="file" name="avatar">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="btn btn-outline-success" type="submit">Ajouter avatar</button>
                </div>
            </div>
        </form>

    </div>
</div>




@endsection
