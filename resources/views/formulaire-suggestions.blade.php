@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __("Faites vos suggestions") }}</div>

                <div class="card-body">
                    <form method="POST" action="/suggestions/create">
                    @csrf
                        <div class="form-group">
                            <label for="titre">Objet de la Suggestion</label>
                            <input type="text" class="form-control" id="titre" name="titre">
                        </div>
                        <div class="formgroup">
                            <label for="message">Votre suggestion</label>
                            <textarea class=form-control id="message" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Envoyer</button>
                        <button type="reset" class="btn btn-outline-danger">Effacer </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection