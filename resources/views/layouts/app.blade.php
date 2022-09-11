<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-pref etch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uikit.min.css') }}" rel="stylesheet">
    
    <body>
<
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="{{url('http://127.0.0.1:8000')}}"><img src="{{('./images/afiblogo.png')}}" alt="logo" width="40" height="40" ></a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
       
        <li>
          <a href="{{url('http://127.0.0.1:8000')}}">Accueil</a>
        </li>
        <li>
          <a href="#!">Inscription</a>
          <ul class="nav-dropdown">
            <li>
              <a href="{{url('http://127.0.0.1:8000/fieul/create')}}">Fieul</a>
            </li>
            <li>
              <a href="{{url('http://127.0.0.1:8000/parrain/create')}}">Parrain</a>
            </li>
           
          </ul>
        </li>
        <li>
          <a href="{{url('http://127.0.0.1:8000/fieul')}}">Compte</a>
        </li>
        <li>
          <a href="{{url('http://127.0.0.1:8000')}}">Messagerie</a>
       
            <li>
              <a href="{{url('http://127.0.0.1:8000/contact')}}"> Contact</a>
            </li>
          </ul>
        </li>
        
    </nav>
  </div>
</section>

<main class="py-4">
            @yield('content')
        </main>
        <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Actualité</h6>
            <p class="text-justify">l'association <i>a mener une activite </i>du 15 au 20 Aout 2022 Dans le cadre de la promotion de la jeune femme.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Nos valeurs</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/category/c-language/">integrite</a></li>
              <li><a href="http://scanfcode.com/category/front-end-development/">sociabilte</a></li>
              <li><a href="http://scanfcode.com/category/back-end-development/">compassion</a></li>
              <li><a href="http://scanfcode.com/category/java-programming-language/">Amour</a></li>
              <li><a href="http://scanfcode.com/category/android/">partage</a></li>
              <li><a href="http://scanfcode.com/category/templates/">Determination</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Contact</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">+22651530280</a></li>
              <li><a href="http://scanfcode.com/contact/">+22657000003</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">www.afib.facebbok.com</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">afib@gmail.com</a></li>
              <li><a href="http://scanfcode.com/sitemap/">sect 56, kadiogo Ouagadougou</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 tout droits reserves par 
         <a href="#">papiskeita</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>


    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('  /js/uikit-icons.min.js ')}}"></script>
<script>
    (function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').slideToggle();
      });
      // Hamburger to X toggle
      $('#nav-toggle').on('click', function() {
        this.classList.toggle('active');
      });
    }); // end DOM ready
  })(jQuery);

  
  </script>


  
</body>
</html>

