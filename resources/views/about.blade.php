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
     .btn-beige {
     color: #000000;
     background-color:#E4DCD1; /* Couleur beige */
     margin-right: 10px;
 }



     .about-section {
         color: #ffffff; /* Text color for light background */
         background: rgba(0, 0, 0, 0.7); /* Semi-transparent dark background */
         padding: 50px 20px;
         text-align: center;
         position: relative;
         border-radius: 10px; /* Rounded corners for a nice look */
         margin-top: 50px; /* Add some top margin for separation */
     }

     .about-content {
         max-width: 600px;
         margin: 0 auto;
     }

     .about-content h2 {
         font-size: 2.5em;
         margin-bottom: 20px;
         margin-top:65px;
         font-weight: bold;
         color: #E4DCD1; /* Text color for light background */
         font-family: 'Times New Roman', Times, serif; /* Change the font style */
         text-align: center; /* Center the title */
     }

     .about-content p {
         font-size: 1.2em;
         line-height: 1.6;
         color: #E4DCD1; /* Text color for light background */
         font-family: 'Times New Roman', Times, serif; /* Change the font style */
         margin-top: 10px;
         text-align: center; /* Center the title */

     }

     .about-image {
         float: right;
         margin-left: 20px;
         max-width: 100%;
         border-radius: 8px;
     }
</style>
<!-- Section À propos -->
<div class="container about-section">
    <div class="row">
        <div class="col-md-6 about-content">
            <h2>Bienvenue chez ANGIE CILS</h2>
            <p>
Bienvenue chez Angie Cils, un superbe institut de beauté situé à Boulogne-Billancourt, dans les Hauts-de-Seine. Profitez du savoir-faire d'une esthéticienne spécialisée pour accentuer votre beauté naturelle et obtenir un regard de biche.                </p>
        </div>
        <div class="col-md-6">
            <img class="about-image" src="{{ asset('images/apropos_img.webp') }}" alt="Photo du salon de beauté">
        </div>
    </div>
</div>

