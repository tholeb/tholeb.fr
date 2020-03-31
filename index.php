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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
      <style media="screen">
        .irs--flat .irs-from,.irs--flat .irs-to,.irs--flat .irs-single {background-color: #9e9e9e!important; color:black;}
        .irs--flat .irs-from:before,.irs--flat .irs-to:before,.irs--flat .irs-single:before {border-top-color: white!important;}
        .irs--flat .irs-bar {background-color: #212121!important;}
        .irs--flat .irs-handle.state_hover>i:first-child,.irs--flat .irs-handle:hover>i:first-child {background-color: #9e9e9e!important}
        .irs--flat .irs-handle>i:first-child {background-color: white!important;}
      </style>
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
      <div class="slider fullslider show-on-large hide-on-med-and-down">
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
                      <h5 class="white-text center bebas" style="letter-spacing:0.5rem;"><span class="neon">During Five Years of learning</span></h5>
                      <div class="col s12 l12 m12" style="padding-top:30%;">
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
      <div class="parallax-container hide-on-large-only show-on-medium-and-down" style="height:100vh;">
          <div class="container">
              <div class="section no-pad-bot">
                  <h4 class="white-text center bebas" style="letter-spacing:1rem"><span class="neon">Welcome into my website</span></h4>
                  <h5 class="white-text center bebas" style="padding-bottom:20px;"><span class="neon">Look further into my work and who I am</span></h5>
                  <div class="col s12 l12 m12" style="padding-top:50%;">
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
              </div>
          </div>
          <div class="parallax">
              <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin" class="parallaxinfo">
          </div>
      </div>
      <?php include('assets/resources/elements/header.php') ?>
      <div class="section" id="about">
          <div class="container">
              <div class="row">
                  <h3 class="white-text center bebas animate fadeInLeftBig">About me</h3>
                  <div class="container">
                      <div class="row animate fadeIn">
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
      <div class="parallax-container" style="height:150px;">
          <div class="container">
              <div class="section no-pad-bot">
                  <h4 class="white-text center bebas animate fadeInLeftBig" style="letter-spacing:1rem"><span class="neon">Projects and work</span></h4>
                  <h6 class="white-text center bebas animate fadeInRightBig" style="padding-bottom:20px;"><span class="neon">My private and public projects</span></h6>
              </div>
          </div>
          <div class="parallax">
              <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
          </div>
      </div>
      <div class="section" id="projects">
        <div class="container">
          <div class="row">
            <h3 class="white-text center bebas animate fadeInLeftBig">My Private projects</h3>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="divider"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col s12 m6 l6 animate fadeInLeft">
                <div class="card purple accent-3">
                  <div class="card-content white-text">
                    <span class="card-title">VLife Roleplay - Website</span>
                    <p class="center"><img src="assets/img/logo/vlife.png" alt="vlife logo" style="width:50%;"></p>
                    <p>Since 2018 I work as a team of devloper for a video game project. I worked on the server creation (Lua) and on the website. This website use many APIs/library like SteamAuth, DiscordAuth, HighCharts, Jquery, Jquery Datatables, FiveM's API... <br>A part of this website will be OpenSourced.</p>
                  </div>
                  <div class="card-action">
                    <a href="http://vlife.tholeb.fr/" class="white-text"><i class="fas fa-link"></i> Link to the website (WIP)</a>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6 animate fadeInRight">
                <div class="card amber">
                  <div class="card-content white-text">
                    <span class="card-title">Beesight</span>
                    <p class="center"><img src="assets/img/logo/beesight.png" alt="beesight logo" style="width:50%;"></p>
                    <p class="black-text">For my last year of high school at Chevrollier, I have to realize a project. This project in group of 4 students, consists in monitoring an appiary to simplyfify the use for the beekeeper. This project use multiple APIs/library like highcharts, Jquery, Jquery Datatables...</p>
                  </div>
                  <div class="card-action">
                    <a href="http://beesight.tholeb.fr" class="black-text"><i class="fas fa-link"></i> Link to the website (WIP)</a>
                    <a href="https://github.com/tholeb/tlb_beesight" class="black-text"><i class="fab fa-github"></i> Link to the github</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m6 offset-m3 l4 offset-l4 animate fadeInLeft">
                <div class="card" style="background-color:#7289da;">
                  <div class="card-content white-text">
                    <span class="card-title">VLife Roleplay - Discord bot</span>
                    <p class="center"><img src="https://dragonsniortais.fr/wp-content/uploads/2019/04/discord-logo.png" alt="vlife logo" style="width:50%;"></p>
                    <p>For my server, I had to create a discord bot with a support system <i>(ticket)</i> and differents commands. This discord bot was created using <a href="https://nodejs.org/en/" class="grey-text text-darken-3"><i class="fab fa-node"></i>NodeJs</a> and the <a href="https://discord.js.org/#/" class="grey-text text-darken-3"><i class="fab fa-discord"></i>Discord.Js Library</a>.<br></p>
                  </div>
                  <div class="card-action">
                    <a href="#" class="white-text"><i class="fas fa-unlink"></i> Unfortunately you can't access or see my work.</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="parallax-container hide-on-med-and-down" style="height:350px;">
          <div class="container show-on-medium-and-up hide-on-small-only">
              <div class="section no-pad-bot">
                  <h4 class="white-text center bebas animate fadeInLeftBig" style="letter-spacing:1rem"><span class="neon">Few numbers</span></h4>
                  <h6 class="white-text center bebas animate fadeInRightBig" style="padding-bottom:20px;"><span class="neon">Hover me to get more infos</span></h6>
                  <div class="row center-align valign valign-wrapper">
                      <div class="col s12 m6 l3 animate fadeInLeft">
                        <i class="material-icons fab fa-github white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="repositories_count"></span></h4>
                        <h5 class="white-text tooltipped bebas neon" data-position='bottom' data-tooltip="Total of public repos that I have">Public repos</h5>
                      </div>
                      <div class="col s12 m6 l3 animate fadeInLeft">
                        <i class="material-icons fas fa-file white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="type_lang"></span></h4>
                        <h5 class="white-text tooltipped tooltipped bebas neon" data-position='bottom' data-tooltip="Languages used for this project">Languages</h5>
                      </div>
                      <div class="col s12 m6 l3 animate fadeInRight">
                        <i class="material-icons fas fa-code white-text fa-4x" style="padding-bottom:20px;"></i>
                        <div class="divider"></div>
                        <h4 class="white-text neon"><span class="total_lines"></span></h4>
                        <h5 class="white-text tooltipped tooltipped bebas neon" data-position='bottom' data-tooltip="Total lines of code for this project">Lines</h5>
                      </div>
                      <div class="col s12 m6 l3 animate fadeInRight">
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
            <h3 class="white-text center bebas animate fadeInLeftBig">My public projects</h3>
            <div class="container">
                <div class="row animate fadeIn">
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
      <div class="parallax-container" style="height:150px;">
          <div class="container">
              <div class="section no-pad-bot">
                <h4 class="white-text center bebas animate fadeInLeftBig" style="letter-spacing:1rem"><span class="neon">Curriculum Vitae</span></h4>
                <h6 class="white-text center bebas animate fadeInRightBig" style="padding-bottom:20px;"><span class="neon">Look further into my knowledge and my diplomas</span></h6>
              </div>
          </div>
          <div class="parallax">
              <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
          </div>
      </div>
      <div class="section" id="cv">
        <div class="container">
          <div class="row">
            <div class="col s12 l6 animate fadeInLeft">
              <h2 class="grey-text bebas">Thomas<strong style="font-size:4vw;" class="grey-text text-lighten-2">Lebreton</strong></h2>
              <h5 class="grey-text"><i class="fas fa-birthday-cake"></i> Né le 22 Octobre 2001</h5>
              <p class="grey-text"><i class="fas fa-map-marked"></i> 17 Avenue Vincent Van Gogh - 49240 Avrillé <br>
              <i class="fas fa-mobile-alt"></i> +33 6 02 29 76 20 <br>
              <a href="mailto:tholeb.pro@gmail.com" class="grey-text"><i class="far fa-envelope"></i> tholeb.pro@gmail.com</a> <br>
            </p>
            </div>
            <div class="col s12 l6 animate fadeInRight">
              <img src="assets/img/thomas.jpg" alt="me" class="resize_small circle materialboxed" style="width:50%;height:50%;" data-caption="Me in 2018">
            </div>
          </div>
        </div><br> <br>
        <div class="container">
          <div class="row">
            <h3 class="white-text center bebas animate fadeInLeftBig">Etudes et formations</h3>
            <div class="divider animate fadeIn"></div>
            <div class="col s12 m3 l2 animate fadeInLeftBig">
              <p class="grey-text"><strong>2015-2016</strong></p>
              <p class="grey-text"><strong>2019-2020</strong></p>
            </div>
            <div class="col s12 m9 l10 animate fadeInRightBig">
              <p class="grey-text">Brevet des collèges - <strong>Mention: Assez bien</strong></p>
              <p class="grey-text">Baccalauréat STI2D SIN - <strong>Mention: ???</strong></p>
            </div>
          </div> <br> <br> <br>
          <div class="row">
            <h3 class="white-text center bebas animate fadeInLeftBig">Expériences professionnelles</h3>
            <div class="divider animate fadeIn"></div>
            <div class="col s12 m3 l2 animate fadeInLeftBig">
              <p class="grey-text"><strong>2015-2016</strong></p>
            </div>
            <div class="col s12 m9 l10 animate fadeInRightBig">
              <p class="grey-text">Stage de 3ème à l'école vétérinaire de La Croix Cadeau, Avrillé</p>
            </div>
          </div> <br> <br> <br>
          <div class="row">
            <h3 class="white-text center bebas animate fadeInLeftBig">Langues parlées et autres compétences</h3>
            <div class="divider animate fadeIn"></div>
            <div class="row">
              <div class="col s12 m3 l2 animate fadeInLeftBig">
                <p><p class="grey-text"><strong>Anglais</strong></p></p>
              </div>
              <div class="col s12 m9 l10 animate fadeInRightBig">
                <p class="grey-text">Je possède le niveau B2+, j'ai <strong><i>17,26/20</i></strong> comme moyenne pour les deux trimestres</p>
                <input type="text" class="enslider"/>
              </div>
            </div>
            <div class="row">
              <div class="col s12 m3 l2 animate fadeInLeftBig">
                <p class="grey-text"><strong>Espanol</strong></p>
              </div>
              <div class="col s12 m9 l10 animate fadeInRightBig">
                <p class="grey-text">Je possède le niveau B1, j'ai <strong><i>15,18/20</i></strong> comme moyenne pour les deux trimestres</p>
                <input type="text" class="espslider"/>
              </div>
            </div>
          </div> <br> <br> <br>
          <div class="row">
            <h3 class="white-text center bebas animate fadeInLeftBig">Autres expériences et hobbies</h3>
            <div class="divider animate fadeIn"></div>
            <div class="col s12 m3 l2 animate fadeInLeftBig">
              <p class="grey-text"><strong>date</strong></p>
            </div>
            <div class="col s12 m9 l10 animate fadeInRightBig">
              <p class="grey-text"><strong>text text text text text text text text text text text text text
              text text text text text text text text text text text text text text text text vv</strong></p>
            </div>
          </div>
        </div>
      </div>
      <?php include('assets/resources/elements/footer.php') ?>
      <?php include('assets/resources/meta/scripts.php') ?>
      <script src="assets/js/api_github.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
      <script type="text/javascript">
        $(".enslider").ionRangeSlider({
            min: 0,
            max: 20,
            from: 17.26,
        });
        $(".espslider").ionRangeSlider({
            min: 0,
            max: 20,
            from: 15.18
        });
      </script>
    </body>
  </html>
