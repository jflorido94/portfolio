<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JFlorido94 - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Animaciones AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

  <!-- Bootstrap CSS 5.0.2 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Font Awesome CSS 5.15.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


  <!-- ======= Mobile nav toggle button ======= -->
  <span class="mobile-nav-toggle d-xl-none"> <i class="mobile-toggle-ico fas fa-bars"></i></span>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="<?= base_url('assets/img/profile-img2.jpg')?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href=<?= route_to('main') ?>>Javier Florido</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="www.linkedin.com/in/jflorido94/" class="linkedin">
            <i class="fab fa-linkedin-in fa-fw"></i>
          </a>
          <a href="https://github.com/jflorido94" class="linkedin">
            <i class="fab fa-github fa-fw"></i>
          </a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul class="w-75">
          <li class="w-75">
            <a href="<?= base_url('#hero') ?>" class="nav-link scrollto active d-flex justify-content-between">
              <i class="fas fa-home fa-fw w-50 mx-auto"></i>
              <span class="w-50">Inicio</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#about') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-user-alt fa-fw w-50 mx-auto"></i>
              <span class="w-50">Sobre mi</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#facts') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-award fa-fw w-50 mx-auto"></i>
              <span class="w-50">Logros</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#skills') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-book-open fa-fw w-50 mx-auto"></i>
              <span class="w-50">Habilidades</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#resume') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-route fa-fw w-50 mx-auto"></i>
              <span class="w-50">Cronologia</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#portfolio') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-briefcase fa-fw w-50 mx-auto"></i>
              <span class="w-50">Proyectos</span>
            </a>
          </li>
          <li class="w-75"><a href="<?= base_url('#contact') ?>" class="nav-link scrollto d-flex justify-content-between">
              <i class="fas fa-envelope fa-fw w-50 mx-auto"></i>
              <span class="w-50">Contacto</span>
            </a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detalles del proyecto</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-7">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="<?= $proyect['image'] ?>" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="portfolio-info">
              <h3><?= $proyect['name'] ?></h3>
              <ul>
                <li><strong>Categoria:</strong> <?= $proyect['category'] ?></li>
                <li><strong>Ambito:</strong> <?= $proyect['type'] ?></li>
                <li><strong>Fecha realización:</strong> <?= $proyect['date'] ?></li>
                <li><strong>En proceso:</strong>  <?= $proyect['in_progress']? '<i class="fas fa-check" fa-fw"></i>' : '<i class="fas fa-times fa-fw"></i>'  ?></li>
                <li><strong>Repositorio:</strong> <a href="<?= $proyect['git_url'] ?>">Github</a></li>
                <li><strong>URL</strong>: <a href="<?= $proyect['url'] ?>"><?= $proyect['url'] ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Descripción</h2>
              <p> <?= $proyect['details'] ?></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright <i class="far fa-copyright    "></i> <strong><span> jflorido94.es </span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="<?= base_url('#hero') ?>" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="fas fa-chevron-up"></i>
  </a>


  <!-- vendors JS Files
    <script src="assets/vendors/php-email-form/validate.js"></script> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Script Typed -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <!-- Script AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Script PureCounter -->
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
  <script>
    new PureCounter();
  </script>

  <!-- Script Waypoints -->
  <script src="<?= base_url('assets/js/noframework.waypoints.min.js') ?>"></script>

  <!-- Script Isotope -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

  <?php
  //  var_dump($githubinfo)
  ?>

</body>

</html>