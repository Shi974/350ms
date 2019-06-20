@extends('layouts.main')

@section('content')

<div class="profil text-center">

    <h3>Page Profil de {{ $users->pseudo }}</h3>
    <img src="/storage/{{ auth()->user()->avatar }}" alt="avatar"> 

</div>


<div class="container row d-flex justify-content-around align-items-center">

    <div class="contenu">

        <div class="text-center">
            
            <h5 class="liste">Prenom :</h5> <h4 class="font-weight-bold"> {{ $users->firstname }}</h4>

            <h5 class="liste">Nom :</h5> <h4 class="font-weight-bold">{{ $users->lastname }}</h4>

            <h5 class="liste">Email :</h5> <h4 class="font-weight-bold"> {{ $users->email }}</h4>

            <h5 class="liste">Téléphone : </h5> <h4 class="font-weight-bold">{{ $users->phone }}</h4>

            <h5 class="liste">Pseudo : </h5> <h4 class="font-weight-bold">{{ $users->pseudo }}</h4>

        </div>

        <div class="modif text-center">
            <a href="/profil/edit/{{$users->id}}" role="button" class=" btn btn-outline-success">Modifier<a>
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