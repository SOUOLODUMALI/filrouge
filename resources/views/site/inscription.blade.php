@extends('layouts.app')
@section('content')
</div>
<div class="na">INSCRIPTION DU FIEUL
</div>
<div class="deux"></div>
<div class="container">
    <div class="col">
        <div class="uk-grid uk-align-center uk-width-1-3 uk-card uk-card-default add-main ">
            @if(isset($fileul))
            <form action="{{ route('fieul.update', $fieul) }}" method="POST" enctype="multipart/form-data">
                @method("PUT")
                @else
                <form action="{{ route('fieul.store') }}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf

                    <div class="uk-margin-small">

<div class="uk-inline">
    <span class="uk-form-icon" uk-icon="icon: calendar"></span>
    <input type="text" onfocus="(this.type= 'date')" class="uk-input" id="date_naissance" name="date_naissance" placeholder="date_naissance" value="{{ isset($fieul) ? $fieul->date_naissance : old('date_naissance') }}">
</div>
@error('date_naissance')
<p> {{ $message }} </p>
@enderror
</div>

                    <!-- <img src=" {{ asset('storage/images/logo/logo-v3.jpg') }}" alt="" width="200px" height="200px" class="add-img  uk-align-center"> -->
                    <div class="uk-grid uk-algin-center ">
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="nom" name="nom" placeholder="nom" value="{{ isset($fieul) ? $fieul->nom : old('nom') }}">
                            </div>
                            @error('nom')
                            <p> {{ $message }}</p>
                            @enderror
                       
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="prenom" name="prenom" placeholder="Prenom" value="{{ isset($fieul) ? $fieul->prenom : old('prenom') }}">
                            </div>
                            @error('prenom')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="telephone" name="telephone" placeholder="telephone" value="{{ isset($fieul) ? $fieul->telephone : old('telephone') }}">
                            </div>
                            @error('telephone')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>
                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="pass" name="pass" placeholder="mot de passe" value="{{ isset($fieul) ? $fieul->pass : old('pass') }}">
                            </div>
                            @error('pass')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>

                        <div class="uk-margin-small">
                            <div class="uk-inline">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input type="text" class="uk-input" id="rpass" name="rpass" placeholder=" repeter votre mot de passe" value="{{ isset($fieul) ? $fieul->rpass : old('rpass') }}">
                            </div>
                            @error('rpass')
                            <p> {{ $message }}</p>
                            @enderror
                        </div>

                    <br />
                    <div class="uk-margin">



                    </div>
                    <div class="uk-margin uk-remove-margin-top">
                    <a href="{{ route('fieul.index' ) }}"><button class="submit"> 
                            liste
                            </button></a>
                        <input type="submit" value="Valider" name="ajouter" class="uk-button uk-button-default uk-align-left">
                    </div>
                    <br>
                    <br>
                </form>
                <div class="trois"></div>
        </div>
    </div>



    @endsection