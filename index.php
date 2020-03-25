<?php
  $file = "index";
  require 'config.php';
  include($aURL . "assets/resources/config/config.php");
?>
<!DOCTYPE html>
  <html>
    <head>
      <?php include('assets/resources/meta/head.php') ?>
      <title>tholeb.fr</title>
    </head>

    <body class="grey darken-6" style="overflow-x:hidden;">
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
                  <img src="https://149366088.v2.pressablecdn.com/wp-content/uploads/2019/09/19.10-ermine-wallpaper.jpg"  class="paraslider"> <!-- random image -->
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
                  </div>
              </li>
              <li>
                  <img src="assets/img/slider/slider1.jpeg"  class="paraslider"> <!-- random image -->
                  <div class="caption">
                      <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">My Projects</span></h2>
                      <h5 class="white-text center bebas" style="letter-spacing:0.5rem;padding-bottom:30vh;"><span class="neon">During Five Years of learning</span></h5>
                      <div class="col s12 l12 m12">
                          <div class="row">
                              <div class="col s12 m6 l4 offset-m3 offset-l4">
                                  <div class="card grey darken-6 hoverable z-depth-5">
                                      <div class="card-content white-text center">
                                          <span class="card-title">My projects</span>
                                          <p><span>During my five years of devlopment and learning, i've created many projects, and some are publics. You can see them on <a class="github" href="https://github.com/tholeb/" ><i class="fab fa-github"></i> Github</a> and also below!</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col l5 offset-l2">
                              <div class="hide-on-med-and-down right">
                                  <a href="<?= $wURL; ?>projects" class="waves-effect pulse waves-light btn-large black grey-text text-lighten-4 z-depth-5" target="_blank">My projects</a>
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
            <li><a href="<?= $wURL; ?>#about" class="tooltipped" data-position="bottom" data-tooltip="About/À propos"><i class="material-icons grey-text center">help</i></a></li>
            <li><a href="<?= $wURL; ?>#github" class="tooltipped" data-position="bottom" data-tooltip="Github"><i class="fab fa-github grey-text material-icons center"></i></a></li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>projects" class="tooltipped" data-position="bottom" data-tooltip="My Project/Mes projets"><i class="material-icons grey-text center">code</i></a></li>
            <li><a href="<?= $wURL; ?>contact" class="tooltipped" data-position="bottom" data-tooltip="Contact me/Me contacter"><i class="far fa-envelope material-icons grey-text center"></i></a></li>
            <li><a href="<?= $wURL; ?>cv" class="tooltipped" data-position="bottom" data-tooltip="Curriculum Vitae"><i class="fas fa-address-book material-icons grey-text center"></i></a></li>  </ul>
        </div>
        <div id="scroll-line" class="grey darken-7">
            <div class="scroll-line"></div>
        </div>
      </nav>
      <div class="section" id="about">
          <div class="container">
              <div class="row">
                  <h3 class="white-text center animate fadeInLeftBig">About me</h3>
                  <div class="container">
                      <div class="row">
                          <div class="container">
                              <div class="row">
                                  <div class="divider"></div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row animate fadeInRightBig">
                      <div class="col s12 m6 l6 xl4">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium fas fa-user"></i></h2>
                              <h5 class="center white-text">Who am I?</h5>
                              <p class="light white-text center">I'm a eighteen year old high school student, passionate about HighTechs, computer science, and video games. I love discovering and learning new things by myself.</p>
                          </div>
                      </div>
                      <div class="col s12 m6 l6 xl4">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">code</i></h2>
                              <h5 class="center white-text">My projects</h5>
                              <p class="light white-text center">You can see my work either on <a class="github" href="https://github.com/tholeb/"><i class="fab fa-github"></i> Github</a> <i>(public repos only)</i>, either on this website.</p>
                          </div>
                      </div>
                      <div class="col s12 m12 l12 xl4">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">games</i></h2>
                              <h5 class="center white-text">Work and Passion</h5>
                              <p class="light white-text center">With my passion of video games, I realized many projects for it. It allows me to combine passion, and work.</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="parallax-container" style="height:350px;">
          <div class="container show-on-medium-and-up hide-on-small-only">
              <div class="section no-pad-bot">
                  <h4 class="white-text center bebas" style="letter-spacing:1rem;padding-bottom:20px;"><span class="neon">Few numbers</span></h4>
                  <div class="row center-align valign valign-wrapper">
                      <div class="col s12 m6 l3">
                        <i class="material-icons fab fa-github white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="repositories_count"></span></h4>
                        <h5 class="white-text tooltipped bebas neon" data-position='bottom' data-tooltip="Total of public repos that I have">Public repos</h5>
                      </div>
                      <div class="col s12 m6 l3">
                        <i class="material-icons fas fa-file white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="type_lang"></span></h4>
                        <h5 class="white-text tooltipped tooltipped bebas neon" data-position='bottom' data-tooltip="Languages used for this project">Languages</h5>
                      </div>
                      <div class="col s12 m6 l3">
                        <i class="material-icons fas fa-code white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="total_lines"></span></h4>
                        <h5 class="white-text tooltipped tooltipped bebas neon" data-position='bottom' data-tooltip="Total lines of code for this project">Lines</h5>
                      </div>
                      <div class="col s12 m6 l3">
                        <i class="material-icons fas fa-file-code white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="total_files"></span></h4>
                        <h5 class="white-text tooltipped tooltipped bebas neon" data-position='bottom' data-tooltip="Total files in this project">Files</h5>
                      </div>
                  </div>
              </div>
          </div>
          <div class="parallax">
              <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
          </div>
      </div>
      <div class="section" id="github">
        <div class="container">
          <div class="row">
            <h3 class="white-text center animate fadeInLeftBig">My public projects</h3>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="repositories"></div>
          </div>
        </div>
      </div>
      <footer class="page-footer grey darken-7">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Who am I ?</h5>
              <p class="grey-text text-lighten-4">I'm a eighteen year old high school student, passionate about HighTechs, computer science, and video games. I love discovering and learning new things by myself.</p>
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


      <?php include('assets/resources/meta/scripts.php') ?>
      <script src="assets/js/api_github.min.js" charset="utf-8"></script>
    </body>
  </html>
