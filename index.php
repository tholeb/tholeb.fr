<?php
  $file = "index";
  require 'config.php';
  include($aURL . "assets/resources/config/config.php");
?>
<!DOCTYPE html>
  <html lang="en">
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
                  <img src="assets/img/slider/slider01.png" alt="slider" class="paraslider"> <!-- random image -->
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
                  <img src="assets/img/slider/slider1.jpeg" alt="slider" class="paraslider"> <!-- random image -->
                  <div class="caption">
                      <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">My Projects</span></h2>
                      <h5 class="white-text center bebas" style="letter-spacing:0.5rem;padding-bottom:30vh;"><span class="neon">During Five Years of learning</span></h5>
                      <div class="col s12 l12 m12">
                          <div class="row">
                              <div class="col s12 m6 l4 offset-m3 offset-l4">
                                  <div class="card grey darken-6 hoverable z-depth-5">
                                      <div class="card-content white-text center">
                                          <span class="card-title">My projects</span>
                                          <p>During my five years of devlopment and learning, i've created many projects, and some are publics. You can see them on <a class="github" href="https://github.com/tholeb/" ><i class="fab fa-github"></i> Github</a> and also below!</p>
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
      <?php include('assets/resources/elements/header.php') ?>
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
                      <div class="col s12 m6 l3 xl3">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">assignment_ind</i></h2>
                              <h5 class="center white-text">Who am I?</h5>
                              <p class="light white-text center">I'm a eighteen year old high school student, passionate about HighTechs, computer science, and video games. I love discovering and learning new things by myself.</p>
                          </div>
                      </div>
                      <div class="col s12 m6 l3 xl3">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">code</i></h2>
                              <h5 class="center white-text">My projects</h5>
                              <p class="light white-text center">You can see my work either on <a class="github" href="https://github.com/tholeb/"><i class="fab fa-github"></i> Github</a> <i>(public repos only)</i>, either on this website.</p>
                          </div>
                      </div>
                      <div class="col s12 m6 l3 xl3">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">games</i></h2>
                              <h5 class="center white-text">Work and Passion</h5>
                              <p class="light white-text center">With my passion of video games, I realized many projects for it. It allows me to combine passion, and work.</p>
                          </div>
                      </div>
                      <div class="col s12 m6 l3 xl3">
                          <div class="icon-block">
                              <h2 class="center grey-text"><i class="material-icons medium grey-text center">contacts</i></h2>
                              <h5 class="center white-text">Curriculum Vitae</h5>
                              <p class="light white-text center">You can see my curriculum vitae <a href="#" class="white-text">here</a> and also <a href="mailto:tholeb.pro@gmail.com" class="grey-text">contact me</a> by email.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="parallax-container hide-on-med-and-down" style="height:350px;">
          <div class="container show-on-medium-and-up hide-on-small-only">
              <div class="section no-pad-bot">
                  <h4 class="white-text center bebas" style="letter-spacing:1rem"><span class="neon">Few numbers</span></h4>
                  <h6 class="white-text center bebas" style="padding-bottom:20px;"><span class="neon">Hover me to get more infos</span></h6>
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
      <?php include('assets/resources/elements/footer.php') ?>
      <?php include('assets/resources/meta/scripts.php') ?>
      <script src="assets/js/api_github.min.js"></script>
    </body>
  </html>
