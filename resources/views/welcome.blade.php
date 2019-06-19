@extends('layouts.main')

@section('content')
<div class="text-center">
<h2>Nombre de tournoi organisés:</h2>
<div id='odometer' class='odometer'>0</div>
</div>
<style>
    .odometer {
        font-size: 100px;
        color: red;
    }
</style>

<div class="container">
    <div class="text-center text-justify">
        <h3>Welcome</h3>
    </div>

    <div class="intro text-justify">

        <h3>Qui sont les GDK ? </h3>
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
                odometer.innerHTML = 34;
            }, );
        }

    </script>
    @endsection

    </html>
