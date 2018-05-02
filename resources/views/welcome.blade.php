<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Platform Tutor</title>
  <!-- favicon -->
  <!-- <link rel="icon" href="img/logo-fav.png" sizes="16x16" type="image/png"> -->
  <!-- Bootstrap & Fontawesome CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Lato|Raleway:300,400,600" rel="stylesheet" type="text/css">
  
  <!-- External CSS -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body> 

  <div class="jumbotron jumbotron-fluid jumbotron-fluid-bg pt-0 pt-lg-2 pt-sm-0 pt-md-2 px-5">
    <nav class="navbar navbar-expand-lg navbar-light mx-4 mb-5">
      <a class="navbar-brand text-white font-weight-bold" href="#"><span class="h2 font-weight-bold">platform</span><span class="text-warning h1 font-weight-bold">tutor</span><span class="sr-only">(current)</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="mr-auto">
          
        </ul>
        <ul class="navbar-nav mt-4 pt-3 mt-lg-0 font-weight-bold">
          <li class="nav-item active">
            <a class="nav-link h5 text-white" href="#">About Us </a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5 text-white" href="#">Subjects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5 text-white" href="#">Blog</a>
          </li>
          @if (Route::has('login'))
          <li class="nav-item border-right">
            @auth
            <a class="nav-link h5 text-white" href="{{ url('/home') }}">Home</a>
            @else
            <a class="nav-link h5 text-white" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link h5 text-white" href="{{ route('register') }}">Register</a>
            @endauth

          </li>
          @endif
        </ul>
      </div>
    </nav>
    <h1 class="text-white text-center mt-5 pt-5">Lets help you find a <span class="text-warning">tutor</span>&hellip;</h1>
    <div class="d-flex justify-content-center my-5">
      <div class="w-50 d-flex ash-bg p-2">
        <input type="text" class="form-control form-control-lg rounded-0" placeholder="Subject" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append ml-3">
          <button class="btn btn-lg search-btn rounded-0" type="button">Search</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-5">
    <div>
      <p class="section-header h2 font-weight-bold text-center">About Us </p>
      <p class="section-text h5 text-center py-4 font-weight-bold mx-5 px-5">Platformtutor helps you connect with qualifed and experienced tutors within your area/location to help you master subjects and exams that matter to you most</p>
    </div>
    <div>
      <div class="row my-5">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-5">
          <div class="text-center my-3">
            <i class="fas fa-users fa-3x icon-primary"></i>
          </div>
          <p class="h4 text-center font-weight-bold my-4">Experienced Tutors</p>
          <p class="text-center">Our tutors are qualified, experienced and friendly. This will enable them give you an outstanding result.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-5">
          <div class="text-center my-3">
            <i class="far fa-calendar-alt fa-3x icon-primary"></i>
          </div>
          <p class="h4 text-center font-weight-bold mt-4 mb-3">Let your ward learn at their own pace</p>
          <p class="text-center">Book and plan your private lessons according to your own time and schedule.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
          <div class="text-center my-3">
            <i class="fas fa-check fa-3x icon-primary"></i>
          </div>
          <p class="h4 text-center font-weight-bold my-4 px-5">We give yout the best</p>
          <p class="text-center">Hundreds of parents and students are happy and have given good testimonies for the services that has been offered unto them. </p>
        </div>
      </div>
    </div>
  </div>

  <div class="conainer px-0">
    <div class="row my-5 px-0">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 learning-img-div">
        
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6 dark-gray-bg mx-0 p-5">
        <p class="h3 font-weight-bold text-white">Need home tutor for your kids</p>
        <p class="my-4 text-white">Get fully vetted home tutors who're specifically experienced in teaching, mentoring and inspiring kids like yours.</p>
        <p class="h5 font-weight-bold text-white my-4">Put your kids ahead!</p>
        <div class="d-flex justify-content-center"> 
          <button class="btn bg-white w-75 border-0 rounded-0"><span class="h5 font-weight-bold">Get home <span class="text-warning">tutor</span></span></button>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-5">
    <div class="mb-5 pb-2">
      <p class="section-header h2 font-weight-bold text-center">Subjects </p>
    </div>
      <div class="card-deck mb-5">
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/maths.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Mathematics</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Algebra</span>
              <span class="badge badge-warning mr-auto">Calculus</span>
              <span class="badge badge-success mr-auto">Geometry</span>
            </p>
          </div>
        </div>
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/english.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">English</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Writing</span>
              <span class="badge badge-warning mr-auto">Grammar</span>
              <span class="badge badge-success mr-auto">Literature</span>
            </p>
          </div>
        </div>
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/science.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Science</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Physics</span>
              <span class="badge badge-warning mr-auto">Chemistry</span>
              <span class="badge badge-success mr-auto">Biology</span>
            </p>
          </div>
        </div>
      </div>

      <div class="card-deck my-5 py-5">
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/commerce.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Commerce</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Economics</span>
              <span class="badge badge-warning mr-auto">Accounting</span>
              <span class="badge badge-success mr-auto">Commerce</span>
            </p>
          </div>
        </div>
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/music.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Music &amp; Instruments</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Guitar</span>
              <span class="badge badge-warning mr-auto">Piano</span>
              <span class="badge badge-success mr-auto">Music Theory</span>
            </p>
          </div>
        </div>
        <div class="card rounded-0 card-shadow">
          <img class="card-img-top rounded-0"  style="height:15em;" src="img/exams.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Exams</h5>
            <p class="card-text d-flex">
              <span class="badge badge-primary mr-auto">Waec</span>
              <span class="badge badge-warning mr-auto">Jamb</span>
              <span class="badge badge-success mr-auto">Neco</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid blue-bg">
    <p class="h2 font-weight-bold text-center text-white mx-auto">Experienced in Teaching?</p>
    <div class="d-flex justify-content-center mt-5 pt-3">
      <button class="btn bg-white text-primary  w-sm-100 px-5"><span class="h4"> Apply to tutor</span></button>
    </div>
  </div>

  <footer class="blue-bg p-5">
    <div class="row mx-5">
      <div class="col-12 col-sm-12 col-md-8">
        <p class="text-white h3 font-weight-bold">platform<span class="text-warning h2 font-weight-bold">tutor</span></p>
        <div class="d-flex mt-3">
          <div class="mr-auto d-block">
            <p class="text-capitalize h5 text-white font-weight-bold">Learn with us</p>
            <p class="text-capitalize mb-0 text-white">Home training</p>
            <p class="text-capitalize mt-0 text-white">Find subjects</p>
          </div>
          <div class="mr-auto d-block">
            <p class="text-capitalize h5 text-white font-weight-bold">Work with us</p>
            <p class="text-capitalize mb-0 text-white">Become a tutor</p>
          </div>
          <div class="mr-auto d-block">
            <p class="text-capitalize h5 text-white font-weight-bold">Connect with us</p>
            <p class="text-capitalize mb-0 text-white"><i class="fab fa-facebook-f fa-fw"></i>   Facebook</p>
            <p class="text-capitalize mb-0 text-white"><i class="fab fa-twitter fa-fw"></i>   Twitter</p>
            <p class="text-capitalize mb-0 text-white"><i class="fab fa-instagram fa-fw"></i>   Instagram</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-4 d-flex justify-content-center">
        <div class="text-white d-block" >
          <p class="h4 font-weight-bold text-uppercase mb-3">contact us</p>
          <p class="my-1">Platform Tutor</p>
          <p class="my-0">Okon Rasheed Road,</p>
          <p class="my-0">Uyo, Nigeria</p>
          <p class="my-3"><i class="fas fa-phone text-white"></i> +234 8204 324 2498</p>
        </div>
      </div>
    </div>
  </footer>



  <!--JS, Popper.js, and jQuery  -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>