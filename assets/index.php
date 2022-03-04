<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>APMedicina - Aprendiendo Medicina</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/apexcharts.css">
    <link rel="stylesheet" href="assets/css/plugins/jqvmap.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <link rel="stylesheet" href="assets/css/nulo/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/nulo/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/nulo/animate.css">
    <link rel="stylesheet" href="assets/css/nulo/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nulo/all.min.css">
    <link rel="stylesheet" href="assets/css/nulo/flaticon.css">
    <link rel="stylesheet" href="assets/css/nulo/font.css">
    <link rel="stylesheet" href="assets/css/nulo/metisMenu.css">
    <link rel="stylesheet" href="assets/css/nulo/nice-select.css">
    <link rel="stylesheet" href="assets/css/nulo/slick.css">
    <link rel="stylesheet" href="assets/css/nulo/spacing.css">
    <link rel="stylesheet" href="assets/css/nulo/main.css">

   <style media="screen">
    .ultimo + div {
        visibility: hidden;
    }
        .disclaimer{
			display: none;
		}
    </style>


</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section">


            <!-- Header Main Start -->
            <div class="header-main">
                <div class="container">

                    <!-- Header Main Start -->
                    <div class="header-main-wrapper">

                        <!-- Header Logo Start -->
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo16.png" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="header-menu d-none d-lg-block">
                            <ul class="nav-menu">
                                <li><a href="index.html">Inicio</a></li>
                                <li>
                                    <a href="courses.html">Cursos</a>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <a href="about.html">Nosotros</a>
                                </li>
                                <li><a href="contact.html">Contactos</a></li>
                            </ul>

                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Sing In & Up Start -->
                        <div class="header-sign-in-up d-none d-lg-block">
                            <ul>
                              <?php require 'partials/header.php' ?>

                              <?php if(!empty($user)): ?>
                                <br> Welcome. <?= $user['email']; ?>
                                <br>You are Successfully Logged In
                                <a href="logout.php">
                                  Logout
                                </a>
                              <?php else: ?>
                                <h1>Please Login or SignUp</h1>

                                <a class="sign-in" href="login.php">Login</a> or
                                <a class="sign-up" href="signup.php">SignUp</a>
                              <?php endif; ?>
                            </ul>
                        </div>
                        <!-- Header Sing In & Up End -->

                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle d-lg-none">
                            <a class="menu-toggle" href="javascript:void(0)">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Main End -->

                </div>
            </div>
            <!-- Header Main End -->

        </div>
        <!-- Header Section End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu">

            <!-- Menu Close Start -->
            <a class="menu-close" href="javascript:void(0)">
                <i class="icofont-close-line"></i>
            </a>
            <!-- Menu Close End -->

            <!-- Mobile Top Medal Start -->
            <div class="mobile-top">
                <p><i class="flaticon-email"></i> <a href="mailto:APMedicina26@gmail.com">APMedicina26@gmail.com</a></p>
            </div>
            <!-- Mobile Top Medal End -->

            <!-- Mobile Sing In & Up Start -->
            <div class="mobile-sign-in-up">
                <ul>
                  <li><a class="sign-in" href="404-error.html">Acceder</a></li>
                  <li><a class="sign-up" href="404-error.html">Registrate</a></li>
                </ul>
            </div>
            <!-- Mobile Sing In & Up End -->

            <!-- Mobile Menu Start -->
            <div class="mobile-menu-items">
                <ul class="nav-menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li>
                        <a href="courses.html">Cursos</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="about.html">Nosotros</a>
                    </li>
                    <li><a href="contact.html">Contactos</a></li>
                </ul>

            </div>
            <!-- Mobile Menu End -->

            <!-- Mobile Menu End -->
            <div class="mobile-social">
                <ul class="social">
                  <li><a href="https://web.facebook.com/APMEDICINA"><i class="flaticon-facebook"></i></a></li>
                  <li><a href="https://www.instagram.com/apmedicinaOficial/"><i class="flaticon-instagram"></i></a></li>
                </ul>
            </div>
            <!-- Mobile Menu End -->

        </div>
        <!-- Mobile Menu End -->

      <div class="section slider-section sander">
            <div class="container">

            <section class="slider-area">
                <img class="sl-shape shape_01" src="assets/img/icon/01.svg" alt="">
                 <img class="sl-shape shape_02" src="assets/img/icon/02.svg" alt="">
                 <img class="sl-shape shape_03" src="assets/img/icon/03.svg" alt="">
                 <img class="sl-shape shape_04" src="assets/img/icon/04.svg" alt="">
                 <img class="sl-shape shape_05" src="assets/img/icon/05.svg" alt="">
                 <img class="sl-shape shape_06" src="assets/img/icon/06.svg" alt="">
                 <img class="sl-shape shape_07" src="assets/img/shape/dot-box-5.svg" alt="">
                <div class="main-slider pt-10">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                                <div class="slider__img__box mb-50 pr-30">
                                    <img class="img-one mt-55 pr-70" src="assets/img/slider/01.png" alt="">
                                    <img class="slide-shape img-two" src="assets/img/slider/02.png" alt="">
                                    <img class="slide-shape img-three" src="assets/img/slider/03.png" alt="">
                                    <img class="slide-shape img-four" src="assets/img/shape/dot-box-1.svg" alt="">
                                    <img class="slide-shape img-five shape-1 animation-round" src="assets/img/shape/dot-box-2.svg" alt="Shape">
                                    <img class="slide-shape img-six" src="assets/img/shape/zigzg-1.svg" alt="">
                                    <img class="slide-shape img-seven wow fadeInRight animated" data-delay="1.5s" src="assets/img/icon/dot-plan-1.svg" alt="Chose-img">
                                    <img class="slide-shape img-eight" src="assets/img/slider/earth-bg.svg" alt="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                 <div class="slider__content pt-15">
                                     <h1 class="main-title mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>Aprender Medicina ahora es <span class="vec-shape">más fácil</span> con AP<FONT COLOR="#16BF41">Med</FONT>icina</h1>
                                     <h5 class="mb-35 wow fadeInUp2 animated" data-wow-delay='.2s'>Esta es la comunidad perfecta para todos los estudiantes del Área de la Salud y amantes de las ciencias medicas en general.</h5>

                                 </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
</div>
</div>





        </div>
        <!-- Slider End -->

        <!-- All Courses Start -->
        <div class="section section-padding-02">
            <div class="container">

                <!-- All Courses Top Start -->
                <div class="courses-top">

                    <!-- Section Title Start -->
                    <div class="section-title shape-03">
                        <h2 class="main-title">Todos los <span>Cursos</span> de AP<FONT COLOR="#16BF41">Med</FONT>icina></h2>
                    </div>
                    <!-- Section Title End -->



                </div>
                <!-- All Courses Top End -->

                <!-- All Courses Tabs Menu Start -->
                <div class="courses-tabs-menu courses-active">
                    <div class="swiper-container">
                        <ul class="swiper-wrapper nav">
                            <li class="swiper-slide"><button class="active" data-bs-toggle="tab" data-bs-target="#tabs1">Anatomía</button></li>
                        </ul>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-button-next"><i class="icofont-rounded-right"></i></div>
                    <div class="swiper-button-prev"><i class="icofont-rounded-left"></i></div>
                </div>
                <!-- All Courses Tabs Menu End -->

                <!-- All Courses tab content Start -->
                <div class="tab-content courses-tab-content">
                    <div class="tab-pane fade show active" id="tabs1">

                        <!-- All Courses Wrapper Start -->
                        <div class="courses-wrapper">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Single Courses Start -->
                                    <div class="single-courses">
                                        <div class="courses-images">
                                            <a href="Quiz/Anatomía/abdomen.html"><img src="assets/images/courses/courses-01.jpg" alt="Courses"></a>
                                        </div>
                                        <div class="courses-content">
                                            <div class="courses-author">
                                                <div class="author">
                                                    <div class="author-thumb">
                                                        <a href="#"><img src="assets/images/author/author-01.jpg" alt="Author"></a>
                                                    </div>
                                                    <div class="author-name">
                                                        <a class="name" href="#">Todd Sander</a>
                                                    </div>
                                                </div>
                                                <div class="tag">
                                                    <a href="#">Anatomia</a>
                                                </div>
                                            </div>

                                            <h4 class="title"><a href="courses-details.html">Quiz de abdomen</a></h4>
                                            <div class="courses-meta">
                                                <span> <i class="icofont-clock-time"></i>20 minutos</span>
                                                <span> <i class="icofont-read-book"></i> Abdomen </span>
                                            </div>
                                            <div class="courses-price-review">
                                                <div class="courses-price">
                                                    <span class="sale-parice">Gratis</span>
                                                </div>
                                                <div class="courses-review">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="rating-star">
															<span class="rating-bar" style="width: 90%;"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Courses End -->
                                </div>
                            </div>
                        </div>
                        <!-- All Courses Wrapper End -->

                    </div>

                </div>
                <!-- All Courses tab content End -->

            </div>
        </div>
        <!-- All Courses End -->

                <!-- Call to Action Start -->
                <div class="section section-padding-02">
                    <div class="container">

                        <!-- Call to Action Wrapper Start -->
                        <div class="call-to-action-wrapper">

                            <img class="cat-shape-01 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">
                            <img class="cat-shape-02" src="assets/images/shape/shape-13.svg" alt="Shape">
                            <img class="cat-shape-03 animation-round" src="assets/images/shape/shape-12.png" alt="Shape">

                            <div class="row align-items-center">
                                <div class="col-md-6">

                                    <!-- Section Title Start -->
                                    <div class="section-title shape-02">
                                        <h5 class="sub-title">Sé un miembro de nuestro equipo</h5>
                                        <h2 class="main-title">¿Quieres ser miembro como <span>ayudante?</span></h2>
                                    </div>
                                    <!-- Section Title End -->

                                </div>
                                <div class="col-md-6">
                                    <div class="call-to-action-btn">
                                        <a class="btn btn-primary btn-hover-dark" href="contact.html">Deja tus datos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Call to Action Wrapper End -->

                    </div>
                </div>
                <!-- Call to Action End -->

        <!-- Blog Start -->
        <div class="section section-padding mt-n1">
            <div class="container">

                <!-- Section Title Start -->
                <div class="section-title shape-02 text-center">
                    <h5 class="sub-title">Ultimas Noticias</h5>
                    <h2 class="main-title">Blog de<span> informaciones</span></h2>
                </div>
                <!-- Section Title End -->

                <!-- Blog Wrapper Start -->
                <div class="blog-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a href="blog1.html"><img src="assets/images/blog/blog-01.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-author">
                                        <div class="author">
                                            <div class="author-thumb">
                                                <a href="#"><img src="assets/images/author/author-01.jpg" alt="Author"></a>
                                            </div>
                                            <div class="author-name">
                                                <a class="name" href="#">Todd Sander</a>
                                            </div>
                                        </div>
                                        <div class="tag">
                                            <a href="#">Anatomía</a>
                                        </div>
                                    </div>

                                    <h4 class="title"><a href="blog1-sidebar.html">Bienvenido a nuestra comunidad de emprendedores</a></h4>

                                    <div class="blog-meta">
                                        <span> <i class="icofont-calendar"></i> 24 Febrero, 2022</span>
                                    </div>

                                    <a href="blog1.html" class="btn btn-secondary btn-hover-primary">Ver Más</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>

                    </div>
                </div>
                <!-- Blog Wrapper End -->

            </div>
        </div>
        <!-- Blog End -->

        <!-- Footer Start  -->
        <div class="section footer-section">

            <!-- Footer Widget Section Start -->
            <div class="footer-widget-section">

                <img class="shape-1 animation-down" src="assets/images/shape/shape-21.png" alt="Shape">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 order-md-1 order-lg-1">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <div class="widget-logo">
                                    <a href="#"><img src="assets/images/logo.png" alt="Logo"></a>
                                </div>

                                <div class="widget-address">

                                </div>

                                <ul class="widget-info">
                                    <li>
                                        <p> <i class="flaticon-email"></i> <a href="mailto:apmedicina26@gmail.com">apmedicina26@gmail.com</a> </p>
                                    </li>
                                </ul>

                                <ul class="widget-social">
                                  <li><a href="https://web.facebook.com/APMEDICINA"><i class="flaticon-facebook"></i></a></li>
                                  <li><a href="https://www.instagram.com/apmedicinaOficial/"><i class="flaticon-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <div class="col-lg-6 order-md-3 order-lg-2">

                            <!-- Footer Widget Link Start -->
                            <div class="footer-widget-link">

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Categoría</h4>

                                    <ul class="widget-link">
                                        <li><a href="#">Anatomía</a></li>
                                    </ul>

                                </div>
                                <!-- Footer Widget End -->

                                <!-- Footer Widget Start -->
                                <div class="footer-widget">
                                    <h4 class="footer-widget-title">Links</h4>

                                    <ul class="widget-link">
                                        <li><a href="courses.html">Cursos</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="about.html">Nosotros</a></li>
                                        <li><a href="contact.html">Contactos</a></li>
                                    </ul>


                                </div>
                                <!-- Footer Widget End -->

                            </div>
                            <!-- Footer Widget Link End -->

                        </div>
                        <div class="col-lg-3 col-md-6 order-md-2 order-lg-3">

                            <!-- Footer Widget Start -->
                            <div class="footer-widget">
                                <h4 class="footer-widget-title">Subscribete</h4>

                                <div class="widget-subscribe">
                                    <p>APMedicina es la comunidad perfecta para todos los estudiantes del Area de la Salud en general.</p>

                                    <div class="widget-form">
                                        <form action="index.html">
                                            <input type="text" placeholder="Correo Aquí">
                                            <button class="btn btn-primary btn-hover-dark">Subscribete Ahora</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                    </div>
                </div>

                <img class="shape-2 animation-left" src="assets/images/shape/shape-22.png" alt="Shape">

            </div>
            <!-- Footer Widget Section End -->



        </div>
        <!-- Footer End -->

        <!--Back To Start-->
        <a href="#" class="back-to-top">
            <i class="icofont-simple-up"></i>
        </a>
        <!--Back To End-->

    </div>






    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/video-playlist.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/ajax-contact.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <div
    class="ultimo">

    </div>
</body>



</html>
