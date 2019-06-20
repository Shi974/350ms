@extends ('layouts.main')
@section ('content')

<div class="jumbotron bg-primary text-white rounded-0">
  <div class="container">
    <h1 class="display-3">Ajout d'un nouvel évènement</h1>
  </div>
</div>

<div class="container">

  <form class="form" action="/admin/events/store" method="post">
    @csrf
    
    <div class="form-group">
      <label for="jeu" title="Champ obligatoire">Jeu <span class="required">*</span></label>
      <input name="jeu" type="text" class="form-control {{ $errors->has('jeu') ? ' bg-danger ' : ''}}" id="jeu" placeholder="Jeu" required>
    </div>

    @if ($errors->has('jeu'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('jeu') }}</strong>
      </span>
    @endif 
        
    <div class="form-group">
      <label for="date" title="Champ obligatoire">Date <span class="required">*</span></label>
      <input name="date" type="date" class="form-control" id="date" placeholder="Date" required>
    </div>

    @if ($errors->has('date'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('date') }}</strong>
        </span>
    @endif 

    <div class="form-group">
      <label for="lieu" title="Champ obligatoire">Lieu <span class="required">*</span></label>
      <input name="lieu" type="text" class="form-control" id="lieu" placeholder="Lieu" required>
    </div>

    @if ($errors->has('lieu'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('lieu') }}</strong>
      </span>
    @endif 

    <div class="form-group">
      <label for="horaire_debut" title="Champ obligatoire">Horaire <span class="required">*</span></label>
      <input name="horaire_debut" type="time" class="form-control" id="horaire_debut" placeholder="Horaire" required>
    </div>

    @if ($errors->has('horaire_debut'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('horaire_debut') }}</strong>
      </span>
    @endif 

    <div class="form-group">
      <label for="duree">Durée</label> <span class="facultatif">champ facultatif</span>
      <input name="duree" type="text" class="form-control" id="duree" placeholder="Durée">
    </div>

    @if ($errors->has('duree'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('duree') }}</strong>
      </span>
    @endif 

    <div class="form-group">
      <label for="nb_place" title="Champ obligatoire">Nombre de places <span class="required">*</span></label>
      <input name="nb_place" type="number" class="form-control" id="nb_place" placeholder="Nombre de places" required>
    </div>

    @if ($errors->has('nb_place'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('nb_place') }}</strong>
      </span>
    @endif

    <div class="form-group">
      <label for="nb_place_reserve">Réservations</label> <span class="facultatif">champ facultatif</span>
      <input name="nb_place_reserve" type="number" class="form-control" id="nb_place_reserve" placeholder="Réservations">
    </div>

    @if ($errors->has('nb_place_reserve'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('nb_place_reserve') }}</strong>
      </span>
    @endif

    <div class="form-group">
      <label for="fin_inscription">Fin des inscriptions</label> <span class="facultatif">champ facultatif</span>
      <input name="fin_inscription" type="date" class="form-control" id="fin_inscription" placeholder="Fin des inscriptions">
    </div>

    @if ($errors->has('fin_inscription'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('fin_inscription') }}</strong>
      </span>
    @endif

    <div class="form-group">
      <label for="recompense">Récompense</label> <span class="facultatif">champ facultatif</span>
      <input name="recompense" type="text" class="form-control" id="recompense" placeholder="Récompense">
    </div>

    @if ($errors->has('recompense'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('recompense') }}</strong>
      </span>
    @endif

    <div class="form-group">
      <label for="prix">Prix d'entrée</label> <span class="facultatif">champ facultatif</span>
      <input name="prix" type="number" class="form-control" id="prix" placeholder="Prix d'entrée">
    </div>

    @if ($errors->has('prix'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('prix') }}</strong>
      </span>
    @endif

    <div class="form-group">
      <label for="image">Image</label> <span class="facultatif">champ facultatif</span> <br/>
      > <input name="image" type="file" id="image" accept="image/png, image/jpeg">
    </div>

    @if ($errors->has('image'))<!--afficher l'erreur dans le formulaire-->
      <span class="help-block">
        <strong>{{ $errors->first('image') }}</strong>
      </span>
    @endif

    <button type="submit" class="btn btn-primary">Ajouter</button>
    <button type="reset" class="btn btn-danger">Effacer</button>
  </form>
</div>

@stop