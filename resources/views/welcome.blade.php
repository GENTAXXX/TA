<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">s
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIMAGANG</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/sim-vertical-white.png') }}" rel="icon">
    <link href="{{ asset('img/sim-vertical-blue.png') }}" rel="sim-vertical-blue">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Lumia - v2.1.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto ">
                <!-- <h1><a href="index.html"> SIMagang</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.html"><img src="{{ asset('img/sim-horizontal-white.png') }}" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="profile.html">Dashboard</a></li>
                    <!-- <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="#about">About</a></li>
            
              <li class="drop-down"><a href="#">Deep Drop Dow</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> -->

                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="{{ route('login') }}"><i class="icofont-logout"></i>Log In</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Selamat datang di <span>SIMagang</span></h1>
            <h2>Your Intern Partner</h2>
            <a href="#testimonials" class="btn-get-started scrollto">Mulai</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- search bar -->
        <!-- Search form -->
        <section class="justify-content-center align-items-center">
            <div class="container">
                <div class="mr-xl-5 ml-xl-5 p-xl-5">
                    <input class="form-control search-bar" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
        </section>

        <!-- end of search bar  -->
        <!-- ======= What We Do Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Rekomendasi</h2>
                    <p>Rekomendasi Lowongan Sesuai Dengan Kemampuanmu</p>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <a href="detail-lowongan.html">
                            <h3>Front End Web Developer</h3>
                            <img src="assets/img/sim-vertical-black.png" class="testimonial-img" alt="">
                            <div class="icon-box container">
                                <ul class="list-unstyled ">
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="testimonial-item">
                        <a href="detail-lowongan.html">
                            <h3>Front End Web Developer</h3>
                            <img src="assets/img/sim-vertical-black.png" class="testimonial-img" alt="">
                            <div class="icon-box container">
                                <ul class="list-unstyled ">
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="testimonial-item">
                        <a href="detail-lowongan.html">
                            <h3>Front End Web Developer</h3>
                            <img src="assets/img/sim-vertical-black.png" class="testimonial-img" alt="">
                            <div class="icon-box container">
                                <ul class="list-unstyled ">
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="testimonial-item">
                        <a href="detail-lowongan.html">
                            <h3>Front End Web Developer</h3>
                            <img src="assets/img/sim-vertical-black.png" class="testimonial-img" alt="">
                            <div class="icon-box container">
                                <ul class="list-unstyled ">
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- End What We Do Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Lowongan</h2>
                    <p>Lowongan lain yang dapat kamu pilih</p>
                </div>
                <div class="justify-content-between ">
                    <div class="row m-sm-5  card-list border">
                        <div class="col-sm-3">
                            <a href="detail-lowongan.html">
                                <img src="assets/img/sim-vertical-black.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <h3>Back End Developer</h3>
                            <ul class="list-unstyled ">
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </span>
                            </ul>
                        </div>
                    </div>

                    <div class="row m-lg-5  card-list border">
                        <div class="col-sm-3">
                            <a href="detail-lowongan.html">
                                <img src="assets/img/sim-vertical-black.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <h3>Back End Developer</h3>
                            <ul class="list-unstyled ">
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </span>
                            </ul>
                        </div>
                    </div>

                    <div class="row m-lg-5 icon-box card-list border ">
                        <div class="col-sm-3">
                            <a href="detail-lowongan.html">
                                <img src="assets/img/sim-vertical-black.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <h3>Back End Developer</h3>
                            <ul class="list-unstyled ">
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/building.svg') }}" alt="" style="height: 20px;width: 20px;" class=""></span><span class="ml-3">PT. Lotech</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/placeholder.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Jakarta, Indonesia</span></li>
                                </span>
                                <span>
                                    <li class="d-flex align-items-start m-3"><span><img src="{{ asset('assets/img/filter.svg') }}" alt="" style="height: 20px;width: 20px;"></span><span class="ml-3">Web Developer</span></li>
                                </span>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>SIMagang</h3>
                        <p>
                            Jalan Sekip <br>
                            Yogyakarta<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> +62 821 37057694<br>
                            <strong>Email:</strong> simagang@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Lowongan Favorit</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Developer</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Android Developer</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Data Analayst</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">UI Designer</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Perusahaan Favorit</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>SIMagang</span></strong>. All Rights Reserved
                </div>
                <div class="credits">

                    Designed by <a href="#">SIM</a>
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

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>