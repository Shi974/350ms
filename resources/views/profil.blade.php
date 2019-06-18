@extends('layouts.main')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           

            <form class="section" action="/ajout_avatar" method="post" enctype="multipart/form-data">
                @csrf

                <div class="field">
                    <label class="label"> Ajouter un Nouvel avatar : </label>
                    <div class="control">
                        <input class="input" type="file" name="avatar">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is link" type="submit">Ajouter avatar</button>
                    </div>
                </div>
            </form>





        </div>
    </div>
</div>
 @endsection
