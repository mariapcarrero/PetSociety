<?php
session_start();
if ($_SESSION["id"] == -1) {
  header("location:../Login.php");
}
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Pet Society</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Font -->
    
    
        <link rel="stylesheet" href="css1/normalize.css">
        <link rel="stylesheet" href="css1/main.css">
        <link rel="stylesheet" href="css1/font-awesome.min.css">
        <link rel="stylesheet" href="css1/animate.css">
        <link rel="stylesheet" href="css1/bootstrap.min.css">
        <link rel="stylesheet" href="css1/style.css">
        <link rel="stylesheet" href="css1/responsive.css">
        <script src="js1/vendor/modernizr-2.8.3.min.js"></script>
    
    
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
    <!-- Header Start -->
    <header id="home">
      
      <!-- Main Menu Start -->
      <div class="main-menu">
        <div class="navbar-wrapper">
          <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
            
              </div>
              
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#home">Inicio</a></li>
                  <li><a href="/ModificarCuenta/index.php">Modificar Cuenta</a></li>
                  <li><a href="registroMascota.php">Registrar una Mascota</a></li>
<li><a href="gestionMascotas.php">Gestionar Mascotas</a></li>
                  <li><a href="/Adopcion/adopcion.php">Adopción</a></li>
                  <li><a href="/Adopcion/adopcion.php">Venta</a></li>
                  <li><a href="#features">Servicios</a></li>
                  <li><a href="logout.php">Cerrar Sesión</a></li>
                  <!-- <li><a href="#feature-work">Contactenos</a></li>
                  <li><a href="#testimonials">Testimonials</a></li>
                  <li><a href="#blog">Blog</a></li>
                  <li><a href="#pricing">Pricing</a></li>
                  <li><a href="#faq">FAQ</a></li> -->
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <!-- Main Menu End -->
         <section id="features" class="site-padding">
    
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title">
              <h3>Nuestros <span>Servicios</span></h3>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
        
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInLeft">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-bitbucket"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Mascotas</h4>
                    <p>En esta sección podrás ver la oferta de mascotas registradas en la página web. Y si estás registrado, podrás adquirir las que quieras.</p>
                    <a href="#"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feature-->
          
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInLeft">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-apple "></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Venta de Mascotas</h4>
                    <p>En esta sección podrás ver la oferta de mascotas en venta en la página web. Y si estás registrado, podrás adquirir las que quieras.</p>
                    <a href="#"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feature-->
          
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInRight">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-automobile "></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Adopción de Mascotas</h4>
                    <p>En esta sección podrás ver la oferta de mascotas para adopción en la página web. Y si estás registrado, podrás adoptar las que quieras.</p>
                    <a href="Adopcion/adopcion.php"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feature-->

          
        </div>
        
        
        <div class="row">
        
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInLeft">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-bullhorn "></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Subasta de Mascotas</h4>
                    <p>En esta sección podrás ver la oferta de mascotas subastadas en la página web. Y si estás registrado, podrás participar en las que quieras.</p>
                    <a href="#"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feature-->
          
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInLeft">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-camera-retro"></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Artículos de mascotas</h4>
                    <p>En esta sección podrás ver la oferta de artículos en la página web. Y si estás registrado, podrás obtener los que quieras.</p>
                    <a href="#"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Single Feature-->
          
          <!-- Single Feature-->
          <div class="col-sm-4">
            <div class="single-feature wow fadeInRight">
              <div class="row">
                <div class="col-md-2">
                  <div class="feature-icon">
                    <i class="fa fa-coffee "></i>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="feature-text">
                    <h4>Ver tu cuenta</h4>
                    <p>Si estás registrado, aquí podrás configurar tus mascotas registradas en la página web.</p>
                    <a href="#"><< IR >></a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Single Feature-->
          
          
        </div>
        
        
      </div>
    </section>
      <!-- Sider Start -->
      <div class="slider">
        <div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators indicatior2">
            <li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#fawesome-carousel" data-slide-to="1"></li>
          </ol>
         
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="imagenes1/slide11.jpg" alt="Sider Big Image">
              <div class="carousel-caption">
                <h1 class="wow fadeInLeft">Sé parte de la nueva comunidad de mascotas</h1>
                <div class="slider-btn wow fadeIn">
                  <a href="#" class="btn btn-learn">Aprende más</a>
                </div>
              </div>
            </div>
            <div class="item">
              <img src="imagenes1/slide10.jpg" alt="Sider Big Image">
              <div class="carousel-caption">
                <h1 class="wow fadeInLeft">Sé parte de la nueva comunidad de mascotas</h1>
                <div class="slider-btn wow fadeIn">
                  <a href="#" class="btn btn-learn">Aprende más</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sider End -->
      
    </header>
    <!-- Header End -->
    
    
    <!-- About Section -->
    <section id="about" class="site-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="about-image wow fadeInLeft">
              <img src="imagenes1/logo.png" alt="About Image" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="about-text wow fadeInRight">
              <h3>Sobre nuestra compañía</h3>
              <p>Pet Society es una empresa que busca facilitar la compra, subasta o adopción de mascotas. Además ofrece medios de comunicación entre los usuarios de modo que puedan compartir opiniones, información, o simplemente leer y conversar sobre mascotas.</p>
              <a href="#" class="btn btn-read-more">Lee más</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    
    
    <!-- Award Winning Section 
    
    <section id="awards" class="site-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="progress-bar-custom wow fadeInLeft">
              <h5>Photoshop</h5>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                60%
                </div>
              </div>
            </div>
            
            <div class="progress-bar-custom wow fadeInLeft">
              <h5>Illustrator</h5>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                90%
                </div>
              </div>
            </div>
            
          </div>
          
          <div class="col-sm-4">
            
            <div class="progress-bar-custom wow fadeInLeft">
              <h5>Web Design</h5>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                80%
                </div>
              </div>
            </div>
            
            <div class="progress-bar-custom wow fadeInLeft">
              <h5>WordPress</h5>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                70%
                </div>
              </div>
            </div>
            
          </div>
          
          
          <div class="col-sm-4">
            <div class="award-win wow fadeInRight">
              <div class="trophy">
                <i class="fa fa-trophy"></i>
              </div>
              <h3>180 <br /> awards get & win</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    -->
    <!-- Award Winning Section -->
    
    
    <!-- Feature Section -->
    
 
    
    <!-- Feature Section -->
    
    
    
    
    <!-- footer -->
    
    <footer>
      <div class="container">
        <div class="row">
        
          <!-- Single Footer -->
          <div class="col-sm-3">
            <div class="single-footer">
              <div class="footer-logo">
                <img src="img/footer-logo.png" alt="Footer Logo" />
                <p>SoftCorp es una compañía de desarrollo de software creada en 2018 a partir de un proyecto innovador denominado
                PetSociety.</p>
                <p>Actualmente el equipo de trabajo se encuentra trabajando principalmente en Pet>Society.</p>
              </div>
            </div>
          </div>
          <!-- Single Footer -->
          
          
          <!-- Single Footer -->
          <div class="col-sm-3">
            <div class="single-footer">
              <h4>Mantente en contacto</h4>
              <p>Pontificia Universidad Javeriana Cali <br />
              +1 (123) 456-7890-321 <br />
              petsocietyonline1234@gmail.com <br />
              (01) 800 854 633</p>
            </div>
          </div>
          <!-- Single Footer -->
          
          
          <!-- Single Footer 
          <div class="col-sm-3">
            <div class="single-footer">
              <h4>Suscribe</h4>
              <p>Enter your Email Address For Subscirbe Our Monthly Newsletters</p>
              
              <form action="">
                <div class="form-group">
                  <input type="email" class="form-control my-form" id="exampleInputEmail1" placeholder="Enter Your Email Address">
                </div>
                <div class="form-group">
                  <button class="btn btn-subscribe">Subscirbe</button>
                </div>
              </form>
              
            </div>
          </div>
           -->
          
          <!-- Single Footer 
          <div class="col-sm-3">
            <div class="single-footer">
              <h4>Recent Projects</h4>
              <ul class="projects">
                <li><img src="img/project.png" alt="Reccent Project" /></li>
                <li><img src="img/project.png" alt="Reccent Project" /></li>
                <li><img src="img/project.png" alt="Reccent Project" /></li>
                <li><img src="img/project.png" alt="Reccent Project" /></li>
                <li><img src="img/project.png" alt="Reccent Project" /></li>
                <li><img src="img/project.png" alt="Reccent Project" /></li>
              </ul>
            </div>
          </div>
           -->
          
        </div>
      </div>
      
    </footer>
    
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="copy-text">
                <p>Todos los derechos reservados | Copyright 2018 © <strong> SoftCorp </a></strong> template by </p>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="footer-menu pull-right">
                <ul>
                  <li><a href="#home">Inicio</a></li>
                  <li><a href="Login.html">Ingresar</a></li>
                  <li><a href="RegistroUsuario.html">Registrarse</a></li>
                  <li><a href="#features">Servicios</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="social">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- footer -->
    
    
    

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js1/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js1/plugins.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <script src="js1/jquery.mousewheel-3.0.6.pack.js"></script>
        <script src="js1/paralax.js"></script>
        <script src="js1/jquery.smooth-scroll.js"></script>
        <script src="js1/jquery.sticky.js"></script>
        <script src="js1/wow.min.js"></script>
        <script src="js1/main.js"></script>
        
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('a[href^="#"]').on('click',function (e) {
          e.preventDefault();

          var target = this.hash;
          var $target = $(target);

          $('html, body').stop().animate({
             'scrollTop': $target.offset().top
          }, 900, 'swing');
          });
      });
    </script>
    
    <script src="js1/custom.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
