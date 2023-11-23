<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Beauty Salon</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- Your Styles -->
    <style>
  
       body::before {
            content: "";
            background-image: url('{{ asset('images/33.jpg') }}');
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.5;
        }
        .navbar-nav .nav-link {
        color:  #000000; /* Remplacez #yourColor par le code de couleur de votre choix */
    }
        

        
    </style>
</head>
<body class="antialiased">

    <div class="site-wrap">

        <div class="site-mobile-menu">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>

        @include('navbar')
        
          

    

    <div class="slide-one-item home-slider owl-carousel">
      
        <div class="site-blocks-cover" style="background-image: url(images/photoBackground.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
  
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h5 class="text-white font-weight-light text-uppercase">Bienvenue à ANGIE CILS </h5>
                <h2 class="text-white font-weight-light mb-2 display-1">Où la beauté prend vie! </h2>
  
                <p><a href="#" class="btn btn-black py-3 px-5">Book Now!</a></p>
              </div>
            </div>
          </div>
        </div>  
  
        <div class="site-blocks-cover" style="background-image: url(images/photoBackground.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row align-items-center justify-content-center text-center">
  
              <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                <h2 class="text-white font-weight-light mb-2 display-1">Cils de rêve, regard envoûtant.</h2>
  
                <p><a href="#" class="btn btn-black py-3 px-5">Book Now!</a></p>
              </div>
            </div>
          </div>
        </div>  
  
      </div>
  
  
      <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-4 text-center">
              <h3 class="line-height-1 mb-3"><span class="d-block display-4 line-height-1 text-black">Bienvenue chez</span> <span class="d-block display-4 line-height-1"><em class="text-primary font-weight-bold">Angie Cils</em></span></h3>
              <p>un superbe institut de beauté situé à Boulogne-Billancourt, dans les Hauts-de-Seine. Profitez du savoir-faire d'une esthéticienne spécialisée pour accentuer votre beauté naturelle et obtenir un regard de biche.</p>
              <p><a href="#"><small class="text-uppercase font-weight-bold">Read More</small></a></p>
            </div>
            <div class="col-md-6 col-lg-4">
              <figure class="h-100 hover-bg-enlarge">
                <div class="bg-image h-100 bg-image-md-height" style="background-image: url('C:\Users\AMEL\AngieCils\public\images\apropos_img.webp');"></div>
              </figure>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="border p-4 d-flex align-items-center justify-content-center h-100">
                <div class="text-center">
                  <h2 class="text-primary h2 mb-5">Opening Hours</h2>
                  <p class="mb-4">
                    <span class="d-block font-weight-bold">Mon – Fri </span>
                    9:30 AM – 8:00 PM
                  </p>
                  <p class="mb-4">
                      <span class="d-block font-weight-bold">Wednesday</span>
                      9:30 AM – 12:00 
                  </p>
                  <p class="mb-4">
                      <span class="d-block font-weight-bold">Saturday</span>
                      10:00 AM – 8:00 PM
                    </p>
  
                  <p class="mb-4">
                    <span class="d-block font-weight-bold">Sunday</span>
                    Closed
                  </p>
  
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7">
              <h2 class="site-section-heading font-weight-light text-black text-center">Featured Services</h2>
            </div>
          </div>
  
          <div class="row">
            <div class="col-md-6 col-lg-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-razor display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Extensions Et Rehaussements De Cils</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$29</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-location-pin display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Teinture De Cils Et Sourcils</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$46</strong></p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 text-center mb-5 mb-lg-5">
              <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                <span class="icon flaticon-shave display-3 text-primary mb-4 d-block"></span>
                <h3 class="text-black h4">Restructuration & Epilation Des Sourcils</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum exercitationem quae id dolorum debitis.</p>
                <p><strong class="font-weight-bold text-primary">$24</strong></p>
              </div>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="site-section bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-5">
              <img src="images/person_1.jpg" alt="Image" class="img-md-fluid">
            </div>
            <div class="col-lg-6 bg-white p-md-5 align-self-center">
              <h2 class="display-1 text-black line-height-1 site-section-heading mb-4 pb-3">New hairstyle!</h2>
              <p class="text-black lead"><em>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dolorem quisquam laudantium, incidunt id laborum, tempora aliquid labore minus. Nemo maxime, veniam! Fugiat odio nam eveniet ipsam atque, corrupti porro&rdquo;</em></p>
              <p class="lead text-black">&mdash; <em>Stellla Martin</em></p>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_2.jpg); background-attachment: fixed;">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
  
            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light mb-5 display-3">Experience Our Outstanding Services</h2>
              <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            </div>
          </div>
        </div>
      </div>  
  
      
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="mb-5">
                <h3 class="footer-heading mb-4">About Hairsal</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
              </div>
  
              
              
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="row mb-5">
                <div class="col-md-12">
                  <h3 class="footer-heading mb-4">Quick Menu</h3>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Barbers</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Team</a></li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Membership</a></li>
                  </ul>
                </div>
              </div>
  
              
  
            </div>
  
            <div class="col-lg-4 mb-5 mb-lg-0">
             
  
              <div class="mb-5">
                <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>
  
                <form action="#" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                    </div>
                  </div>
                </form>
  
              </div>
  
            </div>
            
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="mb-5">
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
  
              <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
  
    <script src="js/main.js"></script>




    <!-- Bootstrap JS and Popper.js (required for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
