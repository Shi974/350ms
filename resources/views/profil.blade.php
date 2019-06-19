@extends('layouts.main')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Mes Informations</div>

                <div class="card-body">
                <ul>
                    <li>
                        <h5 class="font-weight-bold">Prenom :</h5> {{ $users->firstname }}
                    </li>
                    <li>
                        <h5 class="font-weight-bold">Nom :</h5>{{ $users->lastname }}
                    </li>

                    <li>
                        <h5 class="font-weight-bold">Email :</h5> {{ $users->email }}
                    </li>
                    <li>
                        <h5 class="font-weight-bold">Téléphone : </h5>{{ $users->phone }}
                    </li>
                    <li>
                        <h5 class="font-weight-bold">Pseudo : </h5>{{ $users->pseudo }}
                    </li>

                    <li>
                        <h5 class="font-weight-bold">Avatar :</h5>{{ $users->avatar }}
                    </li>
            </p>
            <br />

      <!-- <a href="/user/edit/{{$users->id}}" role="button" class=" btn btn-outline-success">Modifier<a> -->
                    </ul>
        </div>

    </div>



</div>
@endsection