<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">
<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


<link rel="stylesheet" href="css/style.css">

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
                        <li><a href="{{ url('/about') }}">A propos</a></li>
                        <li><a href="{{ url('/chat') }}">Contact</a></li>
                        <li><a href="{{ url('/reservation') }}">Réservation</a></li>
                        
                    </ul>
                </nav>
            </div>
            
              
        </div>
    </div>
</header>