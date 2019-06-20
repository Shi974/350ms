@extends('layouts.main')

@section('content')
<div class="d-flex text-center justify-content-arround p-0 m-0">
    <div class="col-sm">
        <div id='nbTournois' class='odometer display-2'>0</div>
        <h3>Tournoi organisés à la Réunion</h3>
        <div class="underline"></div>
    </div>
    <div class=" col-sm">
        <div id='nbgagant' class='odometer display-2'>0</div>
        <h3>Récompenses gagnées</h3>
        <div class="underline"></div>
    </div>
    <div class=" col-sm">
        <div id='nbParticipants' class='odometer display-2'>0</div>
        <h3>Inscriptions aux évènements 350ms Klub</h3>
        <div class="underline"></div>
    </div>
</div>
<div class="container">
    <div class="text-center text-justify">
        <h3><i class="fas fa-power-off text-primary" alt=""></i> Keep calm and blame it on the lag ! 
        <i class="fas fa-gamepad text-primary" alt=""></i></h3>
    </div>

    <br />

    <div class="intro text-justify">

        <h4><h4><i class="fas fa-headset" alt=""></i>Qui sont les GDK ? </h4>
        <p>GDK (Gamers Da Kour) est une jeune association qui a pour objectif la mise en place de tournois de e-sports aussi bien en ligne qu’en local.Nous aspirons à toucher la plus grande communauté possible en étant présent sur les réseaux sociaux et en ayant un site internet attractif. L’e-sport c’est quoi ? L’esport désigne l’ensemble des pratiques permettant à des joueurs de confronter leur niveau par l’intermédiaire d’un support électronique, et essentiellement le jeu vidéo, et ce quel que soit le type de jeu ou la plateforme (ordinateur, console ou tablette). </p>
        

       
    </div>
    <script src='http://github.hubspot.com/odometer/odometer.js'></script>
    <script>
        function myFunction() {
            setTimeout(function () {
                nbTournois.innerHTML = 149;
                nbParticipants.innerHTML = 1342;
                nbgagant.innerHTML = 100;
            }, );
        }

    </script>
    @endsection
