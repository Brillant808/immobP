<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Tous vos immobiliers en un seuls endroit" />
      <meta name="keywords" content="louer une chambre, acheter un bien-immobilier, immobilier" />
      <meta name="author" content="Pierre Danlome"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- CSS only -->
    <link rel="stylesheet" href="<?php echo asset('css/bootstrap.css')?>">
       @yield('link')
      <link rel="stylesheet" href="<?php echo asset('css/superfish.css')?>">
      <link rel="stylesheet" href="<?php echo asset('css/style.css')?>">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="fh5co-page">
        <header id="fh5co-header-section" class="sticky-banner">
          <div class="container">
            <div class="nav-header">
              <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
              <h1 id="fh5co-logo"><a href="/"><i class="icon-home"></i>ImmobPorto</a></h1>
                <nav id="fh5co-menu-wrap" role="navigation">
                  <ul class="sf-menu" id="fh5co-primary-menu">
                    <li class="active"><a href="/">Accueil</a></li>
                    <li>
                      <a href="/" class="fh5co-sub-ddown">Bien-immobilier</a>
                      <ul class="fh5co-sub-menu">
                        <li><a href="/">À vendre</a></li>
                        <li><a href="/accueil">À louer</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="#" class="fh5co-sub-ddown">Services</a>
                      <ul class="fh5co-sub-menu">
                        <li><a href="/rechercher">Rechercher une annonce</a></li>
                        <li><a href="/publier">Publier une annonce</a></li>
                        <li><a href="#">Contacter une personne</a></li>
                      </ul>
                    </li>
                    <li><a href="/compte">Comptes</a></li>
                    <!-- Right Side Of Navbar -->
                    
                    
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/deconnexion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Déconnexion
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
                	</div>
            		</div>
       	 </nav>
		</div>
            </div>
          </div>
        </header>
        @yield('content')
        <footer id="fh5co-footer" role="contentinfo">
          <div id="footer">
          <p>&copy;ImmobPorto services. Tout droit reservé</p>
          </div>
        </footer>
      </div>
  </body>
</html>

