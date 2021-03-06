<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EMCS Comilla University</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('main')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('main')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('main')}}/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Template Main CSS File -->
  <link href="{{asset('main')}}/assets/css/style.css" rel="stylesheet">
  <link href="{{asset('main')}}/assets/css/saad_style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.0.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->


  <header id="header" class="fixed-top">

    <div class="container">
        <div class="row">
            <div class="col-md-12 top-header">

                      <a href="{{route('home')}}" class="align-center" ><img src="{{asset('main')}}/assets/img/logo.png" alt="" class="img-fluid mx-auto d-block"></a>


                      <h3 class="align-center" href="index.html">Comilla University EMCS</h3>


            </div>
        </div>
    </div>

    <div class="bg-du">

        <div class="container d-flex align-items-center">
          <nav id="navbar" class="navbar order-last order-lg-0 mx-auto d-block">
        <ul>
          <li><a class="active" href="{{route('home')}}">Home</a></li>
          <li><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('about')}}">Academic</a></li>
          <li><a href="{{route('about')}}">Announcment</a></li>
          <li><a href="{{route('about')}}">Research</a></li>
          <li><a href="{{route('about')}}">Alumni</a></li>

          <li class="dropdown"><a href="#"><span>People</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li class="dropdown"><a href="#"><span>Faculty</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{route('about')}}">At a glance</a></li>
                  <li><a href="{{route('about')}}">Faculty Members In Service</a></li>

                </ul>
              </li>
              <li><a href="{{route('about')}}">Staff</a></li>
            </ul>
          </li>
          <li><a href="{{route('about')}}">Sitemap</a></li>

          <li class="dropdown"><a href="#"><span class="btn btn-success">Student Area</span></a>
            <ul>

              <li><a href="#" >Login</a></li>
              <li><a href="{{route('student.create')}}">Register</a> </li>

            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->



     </div><!-- container -->


    </div>
  </header>
  <!-- End Header -->

<div class="main-content-area">
    <main id="main">
    @yield('content')
</div>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Comilla University EMCS</h3>
            <p>
              Department of Computer Science and Engineering
              Comilla University
              Cumilla- 3506

              Bangladesh
              Email: cse  @  cou. ac.bd

              URL: cou.ac.bd/cse   or   cse.cou.ac.bd
              Tel: +8808170022- 25  Ext 194- 198
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Comilla University EMCS</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('main')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('main')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('main')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('main')}}/assets/vendor/purecounter/purecounter.js"></script>
  <script src="{{asset('main')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('main')}}/assets/js/main.js"></script>


</body>

</html>
