<?php
$file = "";
require 'steamauth/steamauth_login.php';
require 'config.php';
require 'assets/resources/config/discordconf.php';
include($aURL . "assets/resources/config/config.php");
include ($aURL."assets/resources/config/fetch.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?= $GLOBAL['title']; ?> I Connexion</title>
  <link rel="icon" type="image/png" href="<?= $wURL ?>assets/img/logo/logo.png">
  <?php include($aURL.'assets/resources/meta/head/head.php') ?>
</head>


<body class="grey darken-3">
  <main>
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>

    <div id="index-banner introduction z-depth-1" class="parallax-container z-depth-1 valign-wrapper" style="height:100vh;">
      <div class="section no-pad-bot"></div>
      <div class="parallax">
        <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
      </div>
      <div class="container">
        <div class="row">
          <div class="col s12 m6 offset-m3">
            <div class="card grey darken-5">
              <div class="card-content white-text">
                <span class="card-title">Formulaire de connexion</span>
                <div class="row">
                  <div class="col l9 offset-l4 m6 offest-m2">
                    <img src="<?= $wURL ?>assets/img/logo/logo.png" style="width:40%;height:40%" class="center hide-on-med-and-down" alt="logo">
                  </div>
                  <div class="col s12 offset-s2">
                    <img src="<?= $wURL ?>assets/img/logo/logo.png" style="width:70%;height:70%" class="center hide-on-large-only show-on-medium-and-down" alt="logo">
                  </div>
                  <div class="col s12 offest-s2 m10 offset-m1 center white-text">
                    <?php if (!isset($_SESSION['steamid'])): ?>
                      <span class="left"><h5 class'white-text' style='font-size:21px;'>Connectez-vous à Discord</h5></span>
                      <span class="right"><h5><i class='fas fa-exclamation-circle red-text text-accent-4 right'></i></h5></span> <br>
                      <div class="col s12">
                        <?php loginbutton('rectangle'); ?>
                      </div>
                    <?php else: ?>
                      <span class="left"><h5 class='white-text' style='font-size:21px;'>Connexion à Steam effectuée</h5></span>
                      <span class="right"><h5><i class='fas fa-check-circle green-text text-accent-5 right'></i></h5></span>
                    <?php endif; ?>

                    <?php if (!session('access_token')): ?>
                      <span class="left"><h5 class='white-text' style='font-size:21px;'>Connectez-vous à Discord</h5></span>
                      <span class="right"><h5><i class='fas fa-exclamation-circle red-text text-accent-4 right'></i></h5></span> <br>
                      <?php if (isset($_SESSION['steamid'])): ?>
                        <a href='?action=login'><img src='https://miro.medium.com/max/800/1*TTOJz35-lJmjWGj59786GA.png' alt='discord' style='width:50%'></a>
                      <?php else: ?>
                        <br><br><br><br>
                        <h6>Merci de vous connecter d'abord à steam.</h6>
                      <?php endif; ?>
                    <?php else: ?>
                      <span class="left"><h5 class='white-text' style='font-size:21px;'>Connexion à Discord effectuée</h5></span>
                      <span class="right"><h5><i class='fas fa-check-circle green-text text-accent-5 right'></i></h5></span>
                      <br>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['steamid']) && session('access_token') || !isset($_SESSION['steamid']) && session('access_token') || isset($_SESSION['steamid']) && !session('access_token')): ?>
                      <?php logoutbutton(); ?>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="card-action">
                <a href="<?= $wURL ?>" class="purple-text text-accent-3"><i class="fas fa-arrow-left"></i> Retour à l'accueil</a>
                <?php if (session('access_token') && isset($_SESSION['steamid'])): ?>
                <span class="white-text right">Redirection à l'accueil dans <span id="countdown" class="purple-text text-accent-3">10</span>s</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="page-footer grey darken-6">
    <?php include($aURL . 'assets/resources/elements/footer/footer.php');  ?>
  </footer>
  <?php include($aURL.'assets/resources/meta/scripts/scripts.php') ?>
  <script type="text/javascript">

    // Total seconds to wait
    var seconds = 12;

    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            window.location = "http://"+window.location.hostname;
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }

    // Run countdown function
    countdown();

</script>
</body>
</html>
