@extends('layouts.main')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __("Faites vos suggestions") }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
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
                            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                                placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">Votre adresse e-mail ne sera communiquée à quiconque .</small>
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
