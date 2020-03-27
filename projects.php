<?php
  $file = "projects";
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

      <?php include('assets/resources/elements/header.php') ?>
      <div class="parallax-container hide-on-med-and-down" style="height:100vh;">
          <div class="container show-on-medium-and-up hide-on-small-only">
              <div class="section no-pad-bot">
                  <h2 class="white-text center bebas" style="letter-spacing:1rem"><span class="neon">My projects</span></h2>
                  <h4 class="white-text center bebas" style="padding-bottom:20px;"><span class="neon">Here you will find my private and public projects</span></h4>
                  <div class="row">
                      <div class="col l12 center">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" style="width:50%;height:50%;"  alt="logo">
                      </div>
                      <div class="col s12">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Octicons-mark-github.svg" class="center hide-on-large-only show-on-medium-and-down" alt="logo">
                      </div>
                  </div>
              </div>
          </div>
          <div class="parallax">
              <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin" class="parallaxinfo">
          </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="row">
            <h3 class="white-text center animate fadeInLeftBig">My public projects</h3>
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
      <div class="section">
        <div class="container">
          <div class="row">
            <h3 class="white-text center animate fadeInLeftBig">My Private projects</h3>
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
              <div class="col s12 m6 offset-m3 l4 offset-l4 animate fadeInUp">
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
      <?php include('assets/resources/elements/footer.php') ?>
      <?php include('assets/resources/meta/scripts.php') ?>
      <script src="assets/js/api_github.min.js" charset="utf-8"></script>
    </body>
  </html>
