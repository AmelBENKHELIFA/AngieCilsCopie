<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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
    <title>Document</title>
    
</head>
<body >
      
    <div class="container ">
        <div class="row">
          <div class="col s12">
            <H1>Ajouter une reservation </H1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{
                        session('status')
                    }}
                </div>
            @endif
            <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{$error}}</li>
            @endforeach
            </ul>
            <form action="/ajouter_reservation_horaire/traitement" method="POST" class="form-group">
                @csrf
            
                <div class="mb-3">
                <label for="date_reservation" class="form-group">date de reservation</label>
                  <input type="date" class="form-control" id="date_reservation" name="date_reservation">
                </div>
                <div class="mb-3">
                  <label for="heure_reservation" class="form-group">heure de reservation</label>
                    <input type="time" class="form-control" id="heure_reservation" name="heure_reservation">
                  </div>
                  <input type="hidden" name="prestations_id" value="{{ $id_prestation }}">
                  <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                <button type="submit" class="btn btn-primary">ajouter une reservation</button>
              </form>
              <BR>
                <a href ="/reservation" class="btn btn-danger">Revenir dans la page réservation </a>
        </div>
      </div>
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