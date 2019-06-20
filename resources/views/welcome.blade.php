@extends('layouts.main')

@section('content')

<div class="d-flex text-center justify-content-around p-0 m-0">
    <div>
        <div id='nbTournois' class='odometer'>0</div>
        <h3>Tournois organisés à la Réunion</h3>
    </div>

    <div >
        <div id='nbgagant' class='odometer'>0</div>
        <h3>Récompenses gagnées</h3>
    </div>

    <div>
        <div id='nbParticipants' class='odometer'>0</div>
        <h3>Joueurs participants</h3>
    </div>
</div>

<div class="container">
    <div class="text-center text-justify">
        <h3>Welcome</h3>
    </div>

    <div class="intro text-justify">

        <h4>Qui sont les GDK ? </h4>
        <p>Hinc ille commotus ut iniusta perferens et indigna praefecti custodiam protectoribus mandaverat fidis.
            quo conperto Montius tunc quaestor acer quidem sed ad lenitatem propensior. </p>

        <p> consulens in commune advocatos palatinarum primos scholarum adlocutus est mollius docens nec decere haec
            fieri nec prodesse </p>

        <p> addensque vocis obiurgatorio sonu quod si id placeret, post statuas Constantii deiectas super adimenda
            vita praefecto conveniet securius cogitari.</p>

        <p>Accedebant enim eius asperitati, ubi inminuta vel laesa amplitudo imperii dicebatur, et iracundae
            suspicionum quantitati proximorum cruentae blanditiae exaggerantium incidentia et dolere inpendio</p>

        <p> simulantium, si principis periclitetur vita, a cuius salute velut filo pendere statum orbis terrarum
            fictis vocibus exclamabant.</p>
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