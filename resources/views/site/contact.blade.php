@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class=" bg-primary">
    <h1>NOS CONTACT</h1>
</div>
</div>
</div>
</section>
    </section>
    <div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26349.99515444679!2d-3.2493169103866464!3d10.967130535773766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe3322af97c16c3b%3A0x4fb1d32357dab09b!2sDi%C3%A9bougou!5e0!3m2!1sfr!2sbf!4v1661527821490!5m2!1sfr!2sbf" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" mt-3></iframe>
</div>
</section>
<section>
    <form class="mt-3">

<div class="uk-margin">
    <div class="uk-inline">
        <span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input" type="text">
    </div>
</div>

<div class="uk-margin">
    <div class="uk-inline">
        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
        <input class="uk-input" type="text">
    </div>
</div>
<div class="uk-margin">
    <div class="uk-inline">
            <textarea class="uk-textarea" uk-icon="icon:  mail" rows="5" placeholder="Textarea"></textarea>
        </div>
        <p uk-margin>
   
    <a href="{{route('fieul.index')}}">Envoyer</button></a>
   
</p>
</form>
</section>
<div class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Nos Contact</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Info adresse
Zone Industrielle de Kossodo
Ouagadougou
Bukina Faso</p>
            </div>
            <div>
                <p>Info adresse
Zone Industrielle de Kossodo
Ouagadougou
Bukina Faso</p>
            </div>
            <div>
                <p>Heure de travail
Notre support disponible pour vous aider
24 heures sur 24, 7 jours sur 7.
Lundi-Samedi: 07h à 17h30

Usine: 24h/24  7jours/7

Dimanche: Fermé</p>
            </div>
        </div>

    </div>
</div>
    @endsection
