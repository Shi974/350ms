@extends('layouts.main')

@section('content')
<div class="container" id="suggestions">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>{{ __("Faites vos suggestions") }}</h3>

                    @guest
                    <span href="login" class="text-center list-group-item-action list-group-item-danger p-2 w-50" id="alert">
                        Veuillez vous <strong><a href="/login" class="text-primary">connecter</a></strong> pour envoyer votre message.
                    </span>
                    @endguest

                </div>

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
                        <br />
                        @guest
                            <button type="submit" class="btn btn-secondary mr-4" disabled data-toggle="tooltip" 
                            data-placement="top" title="Veuillez vous connecter pour accéder au panier">
                                Envoyer
                            </button>
                        @endguest
                        @auth
                        <a href="#">
                            <button type="submit" class="btn btn-outline-primary mr-4">Envoyer</button>
                        </a>
                        @endauth
                        <!-- <button type="submit" class="btn btn-outline-primary">Envoyer</button> -->
                        <button type="reset" class="btn btn-outline-danger">Effacer </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection