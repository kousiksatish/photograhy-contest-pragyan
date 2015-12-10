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
                <h2 class="section-title text-center wow fadeInDown">Register</h2>
                <p class="text-center wow fadeInDown"></p>
            </div>
            <div class="row">
                
                    <h2 class="text-center wow">Preliminary Round</h2>
                    <div class="media service-box wow fadeInRight">
                        <p>
{!! Form::open(array("url"=>action('RegisterController@store'),"class"=>"form-horizontal",'files' => true))!!}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name"><center>Name</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mobile"><center>Mobile number</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="mobile" placeholder="10 digit mobile number" pattern=[0-9]{10} required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email"><center>Email</center></label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="student"><center>Are you a student?</center></label>
    <div class="col-sm-6">
    <div class="col-sm-2">
      <input type="radio" name="student" class="student" value="yes"> Yes
    </div>
    <div class="col-sm-2">
      <input type="radio" name="student" class="student" value="no" checked="true"> No
    </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="collname"><center>College Name</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="collname" id="collname" placeholder="College Name" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="degree"><center>Degree</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="degree" id="degree" placeholder="Degree" disabled>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="dept"><center>Department</center></label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="dept" id="dept" placeholder="Department" disabled>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="year"><center>Year of passing</center></label>
    <div class="col-sm-6">
      <input type="number" class="form-control" name="year" id="year" placeholder="Year of passing" min="2016" disabled>
    </div>
  </div>  

  <div class="form-group">
      <label class="control-label col-sm-2" for="photo1"><center>Photograph 1</center></label>
      <div class="col-sm-6">
          <input type="file" name="photo1" id="photo1" required>
          <canvas id="imageCanvas1"></canvas>
      </div>
    </div>

   <div class="form-group">
      <label class="control-label col-sm-2" for="photo2"><center>Photograph 2</center></label>
      <div class="col-sm-6">
          <input type="file" name="photo2" id="photo2" required>
          <canvas id="imageCanvas2"></canvas>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="photo3"><center>Photograph 3</center></label>
      <div class="col-sm-6">
          <input type="file" name="photo3" id="photo3" required>
          <canvas id="imageCanvas3"></canvas>
      </div>
    </div>

  <div class="form-group">
  <label class="control-label col-sm-2" for="year"><center></center></label>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
{!! Form::close() !!}


                        </p>
                    </div>



                
                
              </div>
          </div>
        
    </section>


  <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="text-align:center">
                    &copy; 2016 Pragyan. Made with &hearts; <a href="#">Delta Force</a>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="{{asset('js/jquery.js')}}"></script>

    <script>
    $('.student').change(function() {
        if(this.value == "yes")
        {
          $("#year").removeAttr('disabled');
          $("#collname").removeAttr('disabled');
          $("#dept").removeAttr('disabled');
          $("#degree").removeAttr('disabled');
        }
        else if(this.value == "no")
        {
          $("#year").val('');
          $("#collname").val('');
          $("#dept").val('');
          $("#degree").val('');
          $("#year").attr('disabled', 'true');
          $("#collname").attr('disabled', 'true');
          $("#dept").attr('disabled', 'true');
          $("#degree").attr('disabled', 'true');
        }
    });

    var imageLoader1 = document.getElementById('photo1');
    imageLoader1.addEventListener('change', handleImage1, false);
    var canvas1 = document.getElementById('imageCanvas1');
    var ctx1 = canvas1.getContext('2d');


    function handleImage1(e){
      console.log("cl");
        var reader = new FileReader();
        reader.onload = function(event){
            var img = new Image();
            img.onload = function(){
                canvas1.width = img.width;
                canvas1.height = img.height;
                ctx1.drawImage(img,0,0);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }

    var imageLoader2 = document.getElementById('photo2');
    imageLoader2.addEventListener('change', handleImage2, false);
    var canvas2 = document.getElementById('imageCanvas2');
    var ctx2 = canvas2.getContext('2d');


    function handleImage2(e){
        var reader = new FileReader();
        reader.onload = function(event){
            var img = new Image();
            img.onload = function(){
                canvas2.width = img.width;
                canvas2.height = img.height;
                ctx2.drawImage(img,0,0);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }

    var imageLoader3 = document.getElementById('photo3');
    imageLoader3.addEventListener('change', handleImage3, false);
    var canvas3 = document.getElementById('imageCanvas3');
    var ctx3 = canvas3.getContext('2d');


    function handleImage3(e){
        var reader = new FileReader();
        reader.onload = function(event){
            var img = new Image();
            img.onload = function(){
                canvas3.width = img.width;
                canvas3.height = img.height;
                ctx3.drawImage(img,0,0);
            }
            img.src = event.target.result;
        }
        reader.readAsDataURL(e.target.files[0]);     
    }

  
    </script>
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
