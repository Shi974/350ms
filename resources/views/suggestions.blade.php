@extends('layouts.main')

@section('content')


<div clas="container">
    <div class="text-center text-justify">

        <h2> Faites vos suggestions </h2>
        <div class="d-flex justify-content-center ">
        <form>
            <div class="formgroup">
                <label for="Inputsuggestion">Votre suggestion</label>
                <textarea class=form-control id="InputText"> </textarea>
            </div>


            <div class="form-group">
                <label for="InputPseudo">Pseudo</label>
                <input type="password" class="form-control" id="InputPseudo" placeholder="Pseudo">
            </div>


            <div class="form-group">
                <label for="InputEmail1">Email</label>
                <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
  
            <button type="submit" class="btn" style="color:#ea0001; background-color:#000000;">Envoyer</button>
        </form>
        </div>
 
    </div>
</div>
@endsection
