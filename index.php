<?php
  $file = "index";
  require 'config.php';
?>
<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="assets/css/style.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="assets/img/logo/tholeb.png">
      <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
      <link rel="manifest" href="assets/img/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="keywords" content="tholeb, thomas lebreton, lebreton">
      <meta name="description" content="French student's website.">
      <meta name="author" content='Thomas "tholeb" Lebreton' />
      <title>tholeb.fr</title>
    </head>

    <body class="grey darken-6">
      <div id="loader-wrapper">
          <div id="loader"></div>
          <div class="loader-section section-left"></div>
          <div class="loader-section section-right"></div>
      </div>
      <div class="fixed-action-btn">
        <button type="button" class="waves-effect waves-grey waves-light btn-flat btn-small" id="scroll-button" onclick="scrollToTop()">
          <i class="large material-icons grey-text">arrow_upward</i>
        </button>
      </div>
      <div class="slider fullslider">
          <ul class="slides">
              <li>
                  <img src="assets/img/slider/slider1.jpeg"  class="paraslider"> <!-- random image -->
                  <div class="caption">
                      <h2 class="white-text center bebas hide-on-med-and-down" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">Welcome into my website</span></h2>
                      <div class="row">
                          <div class="col l12 center">
                              <img src="assets/img/logo/tholeb.png" style="width:50%;height:50%;"  alt="logo">
                          </div>
                          <div class="col s12">
                              <img src="assets/img/logo/tholeb.png" class="center hide-on-large-only show-on-medium-and-down" alt="logo">
                          </div>
                      </div>
                      <div class="row">
                          <div class="col l5">
                              <div class="hide-on-med-and-down right">
                                  <a href="<?= $connectLink ?>" class="waves-effect pulse waves-light btn-large black grey-text text-lighten-4 z-depth-5" target="_blank">My projects</a>
                              </div>
                          </div>
                          <div class="col l2"></div>
                          <div class="col l5">
                              <div class="hide-on-med-and-down left">
                                  <a href="<?= $discordLink ?>" class="waves-effect pulse waves-light btn-large black grey-text text-lighten-4 z-depth-5" target="_blank">About me</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
      <nav class="grey darken-7 navindex">
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>" class="tooltipped" data-position="bottom" data-tooltip="Home/Accueil"><i class="material-icons grey-text center">home</i></a></li>
            <li><a href="<?= $wURL; ?>" class="tooltipped" data-position="bottom" data-tooltip="About/À propos"><i class="material-icons grey-text center">help</i></a></li>
            <li><a href="<?= $wURL; ?>" class="tooltipped" data-position="bottom" data-tooltip="Github"><i class="fab fa-github grey-text material-icons center"></i></a></li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>projects" class="tooltipped" data-position="bottom" data-tooltip="My Project/Mes projets"><i class="material-icons grey-text center">code</i></a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html" class="tooltipped grey-text" data-position="bottom" data-tooltip="I am a ">Mes Projets</a></li>
          </ul>
        </div>
        <div id="scroll-line" class="grey darken-7">
            <div class="scroll-line"></div>
        </div>
      </nav>
      <img src="assets/img/logo/tholeb.png" alt="logo" style="width:70%;">
      <div style="height:500vh;">
      </div>


      <footer class="page-footer grey darken-7">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Footer Content</h5>
              <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Links</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
            <script language="JavaScript">
              function y2k(number) {
                return (number < 1000) ? number + 1900 : number;
              }
              var today = new Date();
              var year = y2k(today.getYear());
              document.write('<span class="left grey-text">© ' + year + ' <a href="https://github.com/tholeb/" class="gituser">Thomas "tholeb" Lebreton</a> - All Rights Reserved</span>');
            </script>
          <span class="right">
            <a class="mailto footer-icons" href="mailto:tholeb.pro@gmail.com"><i class="far fa-envelope"></i></a>
            <a class="github footer-icons" href="https://github.com/tholeb/" ><i class="fab fa-github"></i></a>
            <a class="twitter footer-icons" href="https://twitter.com/tholeb_"><i class="fab fa-twitter"></i></a>
            <a class="licence footer-icons" href="https://github.com/tholeb/tholeb.fr/blob/master/LICENSE">MIT Licence</a>
          </span>

          </div>
        </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="https://kit.fontawesome.com/37a49bd997.js" crossorigin="anonymous"></script>
      <script src="assets/js/materialize.min.js"></script>
      <script src="assets/js/init.min.js"></script>
      <script src="assets/js/main.min.js"></script>
    </body>
  </html>
