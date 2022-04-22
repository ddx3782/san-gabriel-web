<!DOCTYPE html>
<html lang="en">

<head>
  <title>Official Website of Baranggay San Gabriel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('front/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ url('front/css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ url('front/fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ url('front/css/aos.css') }}">
  <link href="{{ url('front/css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ url('front/css/style.css') }}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> May katanungan?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 111-1111111</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> Brgy.SanGabriel@gmail.com</a> 
          </div>
<!-- mapapalitan to kapag may nakalogin -->

          <div class="col-lg-3 text-right">
            @if(Auth::check())
<!-- puntang profile -->
            <a href="" class="small mr-3"><span class="icon-user"></span> 
              {{ Auth::user()->firstname }} {{ Auth::user()->middlename }} {{ Auth::user()->lastname }}
           </a>
           <a href="{{ url('logout') }}" class="small mr-3"><span class="icon-logout"></span>  Logout?</a>


           @else
           <a href="{{ url('login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
           <a href="{{ url('register') }}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
         </div>
         @endif

         </li>

       </div>
     </div>
   </div>
   <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="d-flex align-items-center">
        <div class="site-logo">
          <!--             route to sa home -->
          <a href="#top" class="d-block">
            <img src="{{ url('front/images/brgylogo.png') }}" alt="Image" class="img-fluid">

          </a>
        </div>
        <div class="mr-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">

              @if(Auth::check())
              <li>
                <a href="{{ url('home') }}" class="nav-link text-left">Home</a>
              </li>
              <li class="has-children">
                <a href="about.html" class="nav-link text-left">About Us</a>
                <ul class="dropdown">
                  <li><a href="teachers.html">Our Officers</a></li>
                  <li><a href="about.html">Our Community</a></li>
                </ul>
              </li>
              <li>
                <a href="admissions.html" class="nav-link text-left">Admissions</a>
              </li>

              <li>
                <a href="contact.html" class="nav-link text-left">Contact</a>
              </li>
            </ul>
            @else
            @endif                                                                                                                                                                                                                                                                                        
          </nav>

        </div>
        <div class="ml-auto">
          <div class="social-wrap">
            <a href="#"><span class="icon-facebook"></span></a>
            <a href="#"><span class="icon-twitter"></span></a>
            <a href="#"><span class="icon-linkedin"></span></a>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
              class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>