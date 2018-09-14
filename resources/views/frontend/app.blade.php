<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Reveal Bootstrap Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/frontend/img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/frontend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/frontend/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/frontend/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/frontend/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/frontend/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Reveal
      Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->

    @yield('css')
</head>

<body id="body">

<!--==========================
  Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">info@networker.com.tr</a>
            <i class="fa fa-phone"></i> (+90216) 465 94 94
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>

<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Network<span>er</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#intro">Ana Sayfa</a></li>
                <li><a href="#about">Hakkımızda</a></li>
                <li><a href="#services">Hizmetlerimiz</a></li>
                <li><a href="#clients">Çözüm Ortaklarımız</a></li>
                <li><a href="#contact">İletişim</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

@yield('content')

<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Networker</strong>. Bütün hakları saklıdır.
        </div>
        <div class="credits">

            <a href="#">New CMS</a> by TGkhn
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="/frontend/lib/jquery/jquery.min.js"></script>
<script src="/frontend/lib/jquery/jquery-migrate.min.js"></script>
<script src="/frontend/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/lib/easing/easing.min.js"></script>
<script src="/frontend/lib/superfish/hoverIntent.js"></script>
<script src="/frontend/lib/superfish/superfish.min.js"></script>
<script src="/frontend/lib/wow/wow.min.js"></script>
<script src="/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/frontend/lib/magnific-popup/magnific-popup.min.js"></script>
<script src="/frontend/lib/sticky/sticky.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
<!-- Contact Form JavaScript File -->
<script src="/frontent/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="/frontend/js/main.js"></script>

@yield('js')

</body>
</html>