@extends('layouts.main')


@section('content')

<div class="container">

    <div class="col-12 d-flex justify-content-center ">
        <form class="formulaire" action="/profil/update/{{ $users->id }}" method="post">
        @csrf
        @method('PATCH')

        <div class="form-group ">
                <label for="inputProduct">Prenom</label>
                <input type="text" class="form-control" id="inputprenom" name="prenom" value="{{$users->firstname}}">
            </div>

            @if($errors-> has('firstname'))
            <span class="bg-danger" role="alert"> 
            <strong> {{ $errors->first('firstname')}}</strong>
            </span>
            @endif

            <div class="form-group ">
                <label for="inputFamily" name="family">Nom</label>
                <input type="text" class="form-control" id="inputName" name="nom" value="{{$users->lastname}}">
                
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
                <input type="text" class="form-control" id="inputplace" name="code" value="{{$users->code}}">
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

@endsection