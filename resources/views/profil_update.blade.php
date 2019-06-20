@extends('layouts.main')


@section('content')

<div class="container">

    <div class="col-12 d-flex justify-content-center ">
        <form class="formulaire" action="/profil/update/{{ $users->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group ">
                <label for="inputProduct">Prenom</label>
                <input type="text" class="form-control" id="inputprenom" name="firstname" value="{{$users->firstname}}">
            </div>

            @if($errors-> has('firstname'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('firstname')}}</strong>
            </span>
            @endif

            <div class="form-group ">
                <label for="inputFamily" name="family">Nom</label>
                <input type="text" class="form-control" id="inputName" name="lastname" value="{{$users->lastname}}">
                
            </div>
            
            @if($errors-> has('lastname'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('lastname')}}</strong>
            </span>
            @endif

            <div class="form-group ">
                <label for="inputProduct">Email</label>
                <input type="text" class="form-control" id="inputplace" name="email" value="{{$users->email}}">
            </div>

            @if($errors-> has('email'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('email')}}</strong>
            </span>
            @endif
            
            <div class="form-group ">
                <label for="inputProduct">Téléphone</label>
                <input type="text" class="form-control" id="inputplace" name="phone" value="{{$users->phone}}">
            </div>

            @if($errors-> has('phone'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('phone')}}</strong>
            </span>
            @endif

            <div class="form-group ">
                <label for="inputProduct">Pseudo</label>
                <input type="text" class="form-control" id="inputplace" name="pseudo" value="{{$users->pseudo}}">
            </div>

            @if($errors-> has('pseudo'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('pseudo')}}</strong>
            </span>
            @endif

            <button type="submit" class="btn btn-dark">Modifier</button>

        </form>
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


@endsection