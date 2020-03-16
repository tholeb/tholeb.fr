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
                  <img src="https://usrbinblog.com/wp-content/uploads/2018/06/coding.jpeg" style="filter:grayscale(100%);" class="paraslider"> <!-- random image -->
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
            <li><a href="<?= $wURL; ?>" class="tooltipped" data-position="bottom" data-tooltip="About/À propos"><i class="material-icons grey-text center">github</i></a></li>
            <li><a href="badges.html">Components</a></li>
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


      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script src="assets/js/materialize.min.js"></script>
      <script src="assets/js/init.min.js"></script>
      <script src="assets/js/main.min.js"></script>
    </body>
  </html>
