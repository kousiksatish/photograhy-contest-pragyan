<!DOCTYPE html>
<html lang="en" class="csstransforms csstransforms3d csstransitions">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Pragyan High Definition</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel='stylesheet' type='text/css'>
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
  <script src='https://www.google.com/recaptcha/api.js'></script>
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
          <a class="navbar-brand" href="https://www.pragyan.org/hd/">Pragyan</a>
        </div>
        <div class="collapse navbar-collapse navbar-right">
           <ul class="nav navbar-nav">
           @yield('navbar')
           </ul>
        </div>
      </div>
    </nav>
  </header>
  
  <section id="register">
        <div class="container ">
            @yield('content')
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
