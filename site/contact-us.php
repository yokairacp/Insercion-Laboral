<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Contacto</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:300,400,700,400italic%7CJosefin+Sans:400,700,300italic">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <!-- Page Loader-->
    <div id="page-loader">
      <div class="page-loader-body">
        <div class="cssload-spinner">
          <div class="cssload-cube cssload-cube0"></div>
          <div class="cssload-cube cssload-cube1"></div>
          <div class="cssload-cube cssload-cube2"></div>
          <div class="cssload-cube cssload-cube3"></div>
          <div class="cssload-cube cssload-cube4"></div>
          <div class="cssload-cube cssload-cube5"></div>
          <div class="cssload-cube cssload-cube6"> </div>
          <div class="cssload-cube cssload-cube7"></div>
          <div class="cssload-cube cssload-cube8"></div>
          <div class="cssload-cube cssload-cube9"></div>
          <div class="cssload-cube cssload-cube10"></div>
          <div class="cssload-cube cssload-cube11"></div>
          <div class="cssload-cube cssload-cube12"></div>
          <div class="cssload-cube cssload-cube13"></div>
          <div class="cssload-cube cssload-cube14"></div>
          <div class="cssload-cube cssload-cube15"></div>
        </div>
      </div>
    </div>
    <!-- Page-->
    <div class="page">
     
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-sm-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-stick-up-clone="false" data-md-stick-up-offset="5px" data-lg-stick-up-offset="5px" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php">
                      <div class="brand__name"><img src="images/logo.jfif">
                      </div><span class="brand__slogan">OILP-IPISA</span></a></div>
                </div>
                
                   <!-- RD Navbar Nav-->
              <div class="rd-navbar-nav-wrap">
                <div class="rd-navbar-element">
                  <ul class="list-icons list-inline-sm">
                    <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="https://www.instagram.com/ipisasdb/"><span></span><span></span><span></span><span></span></a></li>
                    <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="https://www.facebook.com/IPISASDB"><span></span><span></span><span></span><span></span></a></li>
                   
                  </ul>
                </div>
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li><a href="index.php">Inicio<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="login.php">Inicia sesion<span></span><span></span><span></span><span></span></a>
                  </li>
                  <li><a href="typography.php">registrate<span></span><span></span><span></span><span></span></a>
                  </li>
                    <li class="active"><a href="contact-us.php">Contacto<span></span><span></span><span></span><span></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-image.jpg);">
        <div class="shell">
          <h1 class="breadcrumbs-custom__title">Contacto</h1>
          <ul class="breadcrumbs-custom__path">
            <li><a href="index.php">Inicio</a></li>
            <li class="active">Contacto</li>
          </ul>
        </div>
      </section>

      <!-- Get in Touch-->
      <section class="section section-md bg-white text-center">
        <div class="shell">
          <div class="range range-md-center">
            <div class="cell-md-11 cell-lg-10">
              
              <div class="layout-columns"> 
                <div class="layout-columns__main">
                  <div class="layout-columns__main-inner">
                    <!-- RD Mailform-->
                    <form action="insertar4.php" method="POST" class="form_contact">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-name">Nombre</label>
                      </div>
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email">E-mail</label>
                      </div>
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message">Mensaje</label>
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      </div>
                      <div class="form-wrap form-button offset-1">
                        <button class="button button-block button-primary-outline button-ujarak" type="submit">Enviar</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="layout-columns__aside">
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Redes Sociales</p>
                    <div class="divider-modern"></div>
                    <ul class="list-inline-xs">
                      
                      <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="https://www.instagram.com/ipisasdb/"><span></span><span></span><span></span><span></span></a></li>
                      <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="https://www.facebook.com/IPISASDB"><span></span><span></span><span></span><span></span></a></li>
                    
                    </ul>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Numero de telefono</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-local_phone"></span></div>
                      <div class="unit__body"><a href="tel:#">809-724-5700</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Direccion</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary material-icons-location_on"></span></div>
                      <div class="unit__body"><a href="#">Av.  Hispanoamericana,Km 1</a></div>
                    </div>
                  </div>
                  <div class="layout-columns__aside-item">
                    <p class="heading-5">Horario</p>
                    <div class="divider-modern"></div>
                    <div class="unit unit-horizontal unit-spacing-xxs">
                      <div class="unit__left"><span class="icon icon-md icon-primary mdi mdi-clock"></span></div>
                      <div class="unit__body"><span>De Lunes a Viernes 7:00–03:20</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Bottom Banner--><a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-php-template.php" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )" target="_blank"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="0" height="0"></a>
      <!-- Page Footer-->
      <footer class="footer-centered section bg-gray-darker">
        <div class="shell">
          <div class="range range-sm-center">
            <div class="cell-sm-10 cell-md-8 cell-lg-6">
              <!-- Brand--><a class="brand" href="index.php">
                <div class="brand__name"><img src="images/LOGOIPI.jpg" alt="" width="50" height="35"/>
                </div><span class="brand__slogan">OILP-IPISA</span></a>
                    <!-- RD Mailform-->
                    <form class="rd-mailform form_inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form__inner">
                        <div class="form-wrap">
                          <input class="form-input" id="subscribe-form-footer-email" type="email" name="email" data-constraints="@Email @Required">
                          <label class="form-label" for="subscribe-form-footer-email">Tu Gmail...</label>
                        </div>
                        <div class="form-button">
                          <button class="button button-link" type="submit">Subscribe</button>
                        </div>
                      </div>
                    </form>
              <ul class="list-icons list-inline-sm">
                <li><a class="icon icon-sm fa fa-instagram icon-style-camera" href="https://www.instagram.com/ipisasdb/"><span></span><span></span><span></span><span></span></a></li>
                <li><a class="icon icon-sm fa fa-facebook icon-style-camera" href="https://www.facebook.com/IPISASDB"><span></span><span></span><span></span><span></span></a></li>
              </ul>
              <!-- Rights-->
              <p class="rights"><span>Ericka Cabrera,</span><span> Yokaira Ceballos & Miledys Gomez  </span><span class="copyright-year"></span><br class="veil-xs"><a class="link-underline" href="#"></a><span> </a></span></p>
            </div>
          </div>
        </div>
      </footer>
              <!-- Rights-->
              
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>