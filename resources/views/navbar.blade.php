<header class="site-navbar py-1" role="banner">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-xl-2" data-aos="fade-down">
                <h1 class="mb-0"><a href="{{ url('/') }}" class="text-black h2 mb-0">Angie Cils</a></h1>
            </div>
            <div class="col-10 col-md-8" data-aos="fade-down">
                <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                    <ul class="site-menu js-clone-nav mx-auto d-lg-flex">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ url('/') }}">A propos</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/reservation') }}">Réservation</a></li>
                    </ul>
                </nav>
            </div>
            
            <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
                <div class="d-none d-lg-inline-block">
                    @if (Route::has('login'))
                        @auth
                            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                <li class="ml-auto">
                                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                                </li>
                            </ul>
                        @else
                            <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                                <li class="ml-auto">
                                    <a href="{{ route('login') }}" class="btn d-lg-inline">Se connecter</a>
                                </li>
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="btn d-lg-inline">S'inscrire</a>
                                    </li>
                                @endif
                            </ul>
                        @endauth
                    @endif
                </div>
            </div>
              
        </div>
    </div>
</header>