@extends('layouts.app')
@section('content')
<main>
 
@if(isset($parrain))
            <form action="{{ route('parrain.update', $parrains) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @else
                <form action="{{ route('parrain.store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf

    <fieldset>
      <legend>Inscription du Parrain</legend>
      <div class="form_group">
        <label for="subscription_nom">Nom</label>
        <input type="text" name="nom" id="Nom"/>
      </div>
      <div class="form_group">
        <label for="subscription_prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom"/>
      </div>
        <div class="form_group">
        <label for="subscription_date_naissance">Date de Naissance</label>
        <input type="Date" name="date_naissance" id="date_naissance"/>
      </div>
      <div class="form_group">
        <label for="subscription_email">email</label>
        <input type="text" name="email" id="email"/>
      </div>
      <div class="form_group">
        <label for="subscription_password">Mot de passe</label>
        <input type="password" name="password" id="password" />
        
      </div>
      <div class="form_group">
        <label for="subscription_password2">Mot de passe ( répétition ) </label>
        <input type="password"  name="password2" id="password2" />
      </div>
      <div class="form_group">
        <label>parrain</label>
        <select name="fieul_id" id="fieul_id">
          <option >-- Sélectionnez --</option>
           @foreach ($fieuls as $fieul) 
          <option value="{{$fieul->id}}">{{$fieul->nom}}</option>
          @endforeach
         
        </select>
      </div>
      <div class="form_group">
        <label for="subscription_password2">J'accepte les cgu</label>
        <input type="checkbox" name="cgu"  id="subscription_cgu" />
      </div>
      <button type="submit " >Enregistrer</button>
    </fieldset>
  </form>
</main>




    @endsection