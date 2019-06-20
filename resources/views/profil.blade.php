@extends('layouts.main')

@section('content')


<div class="text-center text-justify">
    <h3>Votre page profil</h3>
</div>


<div class="text-center align-items-center">

    <h4 class="titreJS"> Game on {{ $users->pseudo }} !<h4>
            <!-- <img src="/storage/{{ auth()->user()->avatar }}" alt="avatar"> -->
            <img src="/images/user.png" alt="avatar">
</div>




<div class="container" id="profil">

    <div class="d-flex flex-row bd-highlight justify-content-around">
        <div class="infos text-center border-light p-5 mb-5 rounded ">
            <h5 class="liste">Prenom :</h5>
            <p class="font-weight-bold"> {{ $users->firstname }}</p>
            <h5 class="liste">Nom :</h5>
            <p class="font-weight-bold">{{ $users->lastname }}</p>
        </div>

        <div class="modif text-center align-self-center">
            <a href="/profil/edit/{{$users->id}}" role="button" class=" btn btn-outline-success">Modifier mes
                informations<a>
        </div>


        <div class="infos text-center border-light p-5 mb-5 rounded ">
            <h5 class="liste">Email :</h5>
            <p class="font-weight-bold"> {{ $users->email }}</p>
            <h5 class="liste">Téléphone : </h5>
            <p class="font-weight-bold">{{ $users->phone }}</p>
        </div>
    </div>
</div>






@endsection
