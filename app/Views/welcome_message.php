<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>JFlorido94 - Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png')?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png')?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Animaciones AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet">

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
                        <a href="<?= base_url('#hero')?>" class="nav-link scrollto active d-flex justify-content-between">
                            <i class="fas fa-home fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Inicio</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#about')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-user-alt fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Sobre mi</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#facts')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-award fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Logros</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#skills')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-book-open fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Habilidades</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#resume')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-route fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Cronologia</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#portfolio')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-briefcase fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Proyectos</span>
                        </a>
                    </li>
                    <li class="w-75"><a href="<?= base_url('#contact')?>" class="nav-link scrollto d-flex justify-content-between">
                            <i class="fas fa-envelope fa-fw w-50 mx-auto"></i>
                            <span class="w-50">Contacto</span>
                        </a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="zoom-in" data-aos-duration="2000">
            <h1>Javier Florido</h1>
            <p>Soy <span class="typed" data-typed-items="Web Developer, Software Developer, Game Developer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= About Section ======= -->
        <section id="about" class="about section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Sobre mi</h2>
                    <p>
                        Mi nombre es Javier Florido. </br>
                        <strong>Técnico superior en desarrollo de aplicaciones webs</strong> con amplios
                        conocimientos en back-end, desarrollados a través de proyectos propios y la formacion continua.
                        </br>
                        Busco desarrollar mi carrera, incorporándome a un equipo tecnológico, contribuyendo con mis
                        habilidades en <strong>C#, PHP y Java</strong>, entre otras, para lograr aplicaciones webs
                        que satisfagan todo tipo de necesidades y preferencias.
                    </p>
                </div>
                <hr>

                <div class="row">
                    <div class="col-lg-4" data-aos="flip-right" data-aos-duration="3000">
                        <img src="assets/img/lengu_trans.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-duration="1000">
                        <h3>Webs &amp; Software &amp; Games Developer.</h3>
                        <p class="fst-italic">
                            Recién titulado en Desarrollo de Aplicaciones Webs con ganas de entrar en un sector laboral
                            en el cual llevo un tiempo relacionado.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i> <strong>Nacimiento:</strong> <span>9 de
                                            Febrero 1994</span></li>
                                    <li><i class="fas fa-chevron-right"></i> <strong>Ciudad:</strong> <span>Paterna del
                                            Campo, Huelva</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="fas fa-chevron-right"></i> <strong>Grado:</strong> <span>Junior</span>
                                    </li>
                                    <li><i class="fas fa-chevron-right"></i> <strong>Email:</strong>
                                        <span>jflorido94@hotmail.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Me considero una persona ordenada, investigadora,
                            curiosa, resolutiva, metódica y trabajadora en
                            equipo.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Logros</h2>
                    <p>Resumen estadístico de logros realizados durante mi trayectoria y formación como desarrollador
                        Web.</p>
                </div>

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="count-box">
                            <i class="fab fa-leanpub fa-fw"></i>
                            <span data-purecounter-start="0" data-purecounter-end="22" data-purecounter-duration="3" class="purecounter"></span>
                            <p><strong>Cursos</strong> realizados via online o presencial.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="fas fa-certificate fa-fw"></i>
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="3" class="purecounter"></span>
                            <p><strong>Certificaciones</strong> obtenidas de cursos realizados presenciales u online.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="count-box">
                            <i class="fas fa-project-diagram fa-fw"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?php echo ($githubinfo ? $githubinfo->public_repos : '13') ?>" data-purecounter-duration="3" class="purecounter"></span>
                            <p><strong>Proyectos</strong> completados y subidos a Github.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="count-box">
                            <i class="fas fa-rocket fa-fw"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="3" class="purecounter"></span>
                            <p><strong>Despligues</strong> públicos de proyectos.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Habilidades</h2>
                    <p>Aquí muestro unas estadisticas de los lenguajes de programación y frameworks que conozco y el
                        nivel de dominio y soltura que creo que tengo en cada uno de ellos.</p>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-6" data-aos="fade-up">


                        <div class="progress">
                            <span class="skill">PHP <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">C# <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Java <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="progress">
                            <span class="skill">Laravel <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Bootstrap <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Codeigniter <i class="val">50%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->


        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Cronologia</h2>
                    <p>Vista cronológica sobre mi experiencia laboral y formativa.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Resumen</h3>
                        <div class="resume-item pb-0">
                            <h4>Javier Florido</h4>
                            <h5> 09/02/1994</h5>
                            <p><em>Desarrollador web con gran interes en la continua formación en distintas ramas de la
                                    informática y la programación.</em></p>
                            <ul>
                                <li>Paterna del Campo, Huelva, ES</li>
                                <li>jflorido94@hotmail.com</li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Formación</h3>
                        <div class="resume-item">
                            <h4>Bachillerato modalidad de Humanidades y ciencias sociales</h4>
                            <h5>2017</h5>
                            <p><em>IES La Palma, La Palma del Condado, HUELVA</em></p>
                        </div>
                        <div class="resume-item">
                            <h4>Grado Superior (FP2) en Desarrollo de Aplicaciones Webs</h4>
                            <h5>2022</h5>
                            <p><em>IES San Sebastian, Huelva, HUELVA</em></p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Experiencia Laboral</h3>
                        <div class="resume-item">
                            <h4>Dependiente y técnico</h4>
                            <h5>2014-2015</h5>
                            <p><em>Alfonso Romero Polo, Paterna del Campo, HUELVA </em></p>
                            <ul>
                                <li>Servicio al cliente en tienda de venta y reparaciones de equipos informáticos.</li>
                                <li>Reparaciones e instalaciones de equipos informáticos tanto Sofware como Hardware.
                                </li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Gerente en nueva apertura</h4>
                            <h5>2015</h5>
                            <p><em>WifiBlaster SL, Minas de Rio Tinto, HUELVA</em></p>
                            <ul>
                                <li>Único empleado en establecimiento de nueva apertura.</li>
                                <li>Venta y reparación de equipos informaticos.</li>
                                <li>Contrataciones de servicio de internet (AirWifi) y telefonia movil.</li>
                                <li>Gestion y realizacion de pedidos.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Proyectos</h2>
                    <p>Listado de proyectos desplegados en servidores de acceso publico organizado por categorias.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-api">APIs</li>
                            <li data-filter=".filter-front">Front</li>
                            <li data-filter=".filter-soft">Software</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php foreach ($proyects as $item ) { ?>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $item['category'] ?>">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="<?= route_to('details', $item['id'])?>" title="Mas detalles">
                                        <i class="fas fa-plus fa-fw"></i>
                                    </a>
                                    <?php if ($item['url']) { ?>
                                        <a href=<?=$item['url'] ?> title="Enlace" target="_blank">
                                            <i class="fas fa-link fa-fw"></i>
                                        </a>
                                        
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>



                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Contacto</h2>
                    <p>Aqui puede descargar mi curriculum vitae o contactar conmigo via email, me pondré en contacto con
                        usted en cuanto reciba el correo.</p>
                </div>
                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-right">
                        <div class="cv d-flex align-items-center flex-wrap justify-content-around">
                            <h4>Obtener mi Curriculum Vitae en formato PDF</h4>
                            <a class="btn btn-outline-primary align-middle mt-4" href=<?= route_to('download') ?> role="button">
                                <i class="fas fa-file-download fa-fw align-middle mx-2"></i> Descargar CV
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-left">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required="">
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required=""></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-primary align-middle mt-4" type="submit">
                                    <i class="fas fa-paper-plane fa-fw align-middle mx-2"></i>
                                    <!-- Enviar Email --> Soon WIP
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->




    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Copyright <i class="far fa-copyright    "></i> <strong><span> jflorido94.es </span></strong>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="<?= base_url('#hero')?>" class="back-to-top d-flex align-items-center justify-content-center">
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
    <script src="<?= base_url('assets/js/noframework.waypoints.min.js')?>"></script>

    <!-- Script Isotope -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js')?>"></script>

    <?php
    //  var_dump($githubinfo)
    ?>

</body>

</html>