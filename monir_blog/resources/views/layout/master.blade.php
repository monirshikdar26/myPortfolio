<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- title_icon -->
    <link rel="icon" href={{asset('images/myicon.svg')}}>

    <!-- Bootstrap CSS File -->
  <link href={{asset('lib/bootstrap/css/bootstrap.min.css')}} rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href={{asset('lib/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
  <link href={{asset('lib/animate/animate.min.css')}} rel="stylesheet">
  <link href={{asset('lib/ionicons/css/ionicons.min.css')}} rel="stylesheet">
  <link href={{asset('lib/owlcarousel/assets/owl.carousel.min.css')}} rel="stylesheet">
  <link href={{asset('lib/lightbox/css/lightbox.min.css')}} rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href={{asset('css/style.css')}} rel="stylesheet">

</head>
<body>
    <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">MoniFolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

    <!-- JavaScript Libraries -->
  <script src={{asset('lib/jquery/jquery.min.js')}}></script>
  <script src={{asset('lib/jquery/jquery-migrate.min.js')}}></script>
  <script src={{asset('lib/popper/popper.min.js')}}></script>
  <script src={{asset('lib/bootstrap/js/bootstrap.min.js')}}></script>
  <script src={{asset('lib/easing/easing.min.js')}}></script>
  <script src={{asset('lib/counterup/jquery.waypoints.min.js')}}></script>
  <script src={{asset('lib/counterup/jquery.counterup.js')}}></script>
  <script src={{asset('lib/owlcarousel/owl.carousel.min.js')}}></script>
  <script src={{asset('lib/lightbox/js/lightbox.min.js')}}></script>
  <script src={{'lib/typed/typed.min.js'}}></script>

   <!-- Main Javascript File -->
   <script src="js/main.js"></script>
</body>
</html>
