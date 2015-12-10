<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pragyan Photoshoot</title>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/css/owl.carousel.css')}}" rel="stylesheet">
  <link href="{{asset('/css/owl.transitions.css')}}" rel="stylesheet">
  <link href="{{asset('/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">
  <style>
  body {
    font-family: 'Montserrat', sans-serif;
  }
  </style>

</head>

<body id="home" class="homepage">
  <header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Pragyan</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
           <ul class="nav navbar-nav">
             <li class="scroll"><a href={{action('RegisterController@index')}}>Home</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Pattern</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Prizes</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Details</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Imp Dates</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Rules</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Judging</a></li>
             <li class="scroll"><a href={{action('RegisterController@index')}}>Sponsors</a></li>
             <li class="scroll active"><a href="#register">Register</a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section id="register">
        <div class="container ">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Registration failed!!!</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>
            <div class="row">
                
                    <h2 class="text-center wow">Thank you for your interest</h2>
                    <div class="media service-box wow fadeInRight">
                        <p>

                          <li>
                            {{$message}}
                          </li>
                          <li>
                            <a href="{{ action('RegisterController@index') }}">Click here</a> to register again...
                          </li>
                        </p>
                    </div>



                
                
              </div>
          </div>
        
    </section>


  <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="text-align:center">
                    Made with &hearts; <a href="#">Delta Force</a>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/mousescroll.js')}}"></script>
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
