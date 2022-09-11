@extends('layouts.app')
@section('content')
 <section>
<div  class="bg-light pb-5" >
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
           <h1>Historique
</h1>
        </div>
    </div>
</div>
</div>
<div  class="bg-light pb-5" >
<div class="container-fluid">
    <div class="row">
        
    <p>
    L’Association Avenir pour les Filles de la Bougouriba (AFIB) a été initialement créée pour appuyer la scolarisation des filles issues de milieux défavorisés et vulnérables de la province de la Bougouriba.
Au fur et à mesure de l’exécution des activités, et ayant constaté que la misère touchait aussi bien les filles que les garçons, les membres de l’association ont décidé d’élargir son champ d’action en intégrant la prise en charge des élèves garçons issus de milieux défavorisés.
</p>
</div></div></div></div>

</section>
<section>
<div class="container-fluid">
    <div class="row">
        
    <div class="slider-container">
            <div class="menus">
                <label for="slide-dot-1"></label>
                <label for="slide-dot-2"></label>
                <label for="slide-dot-3"></label>
            </div>

            <input class="slide-input" id="slide-dot-1" type="radio" name="slides" checked>
            <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide1.jpg">

            <input class="slide-input" id="slide-dot-2" type="radio" name="slides">
            <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide2.jpg">

            <input class="slide-input" id="slide-dot-3" type="radio" name="slides">
            <img class="slide-img" src="https://www.codeur.com/tuto/wp-content/uploads/2021/12/slide3.jpg">

        </div>
<section>
  <section class="position">
  <div class="container-fluid">
    <div class="row">
    <div class="articles">
      <h1>ARTICLE</h1>
      <h3>Education</h3>
<p>Il y a environ six mois, l’AFiB offra du riz et du savon aux familles vulnérables que nous soutenons, et qui avaient particulièrement souffert des effets économiques de la pandémie de la COVID-19 en 2020. <p>
Alors que l’association est actuellement en pleins préparatifs pour se réunir à nouveau à Djébougou et y mener diverses activités, des mères et des pères nous ont approché pour témoigner du soulagement qu’a été cette aide, alors qu’en cette période ils avaient même des difficultés à nourrir correctement leur famille et à acheter des produits de base tel que du savon. <p>
Nous en profitons pour vous relayer leurs remerciements et nous nous joignons à eux pour dire encore MERCI pour votre précieuse générosité</p>
</div>
<aside>
<img id="aside" src="{{asset('./images/FB_IMG_16564053778753836.jpg')}}" alt="aide">
</aside>

</section>



@endsection