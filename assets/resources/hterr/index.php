<?php
require '../../../steamauth/steamauth.php';
require '../../../config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title><?= empty($_GET['error']) ? "000" : $_GET['error']; ?> - Oups! Il a un problème</title>
  <link rel="icon" type="image/png" href="<?= $wURL ?>assets/img/logo/logo.png">
  <meta name="msapplication-TileColor" content="#d500f9">
  <meta name="description" content="VLife Roleplay. Serveur FiveM Serious Roleplay. Developped by tholeb.">
  <meta name="author" content="tholeb" />
  <meta name="keywords" content="roleplay, hyperion, hollywood, fr, french, francais, fivem, gtarp, gta rp, rp, gta, gtav, gta v, gta5, gta 5, hyperion roleplay, v2, topserveur">
  <link href="<?= $wURL ?>assets/resources/hterr/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/css/custom-style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/css/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="<?= $wURL ?>assets/resources/hterr/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body class="grey darken-3">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="error-page">

    <div class="row">
      <div class="col s12">
        <div class="browser-window">
          <div class="top-bar">
            <div class="circles">
              <div id="close-circle" class="circle"></div>
              <div id="minimize-circle" class="circle"></div>
              <div id="maximize-circle" class="circle"></div>
            </div>
          </div>
          <div class="content">
            <div class="row">
              <div id="site-layout-example-top" class="col s12">
                <p class="flat-text-logo center white-text caption-uppercase">
                  <?php if (!empty($_GET['error'])) {
                    if ($_GET['error'] == 200) {
                      echo "Succès de la requête";
                    } elseif ($_GET['error'] == 301) {
                      echo "Redirection permanente";
                    } elseif ($_GET['error'] == 302) {
                      echo "Redirection temporaire";
                    } elseif ($_GET['error'] == 401) {
                      echo "Utilisateur non authentifié";
                    } elseif ($_GET['error'] == 403) {
                      echo "Accès refusé";
                    } elseif ($_GET['error'] == 404) {
                      echo "Page non trouvée";
                    } elseif ($_GET['error'] == 500 || $_GET['error'] == 503) {
                      echo "Erreur serveur";
                    } elseif ($_GET['error'] == 504) {
                      echo "Le serveur n'a pas répondu";
                    }
                  } else {
                    echo "Erreur non reconnu";
                  } ?></p>
              </div>
              <div id="site-layout-example-right" class="col s12 m12 l12">
                <div class="row center">
                  <h1 class="text-long-shadow col s12"><?= empty($_GET['error']) ? "000" : $_GET['error']; ?></h1>
                </div>
                <div class="row center">
                  <p class="center white-text col s12">Oups il y a eu un problème :'(</p>
                  <p class="center s12"><button onclick="goBack()" class="btn waves-effect waves-light">Retour</button> <a href="<?= $wURL ?>" class="btn waves-effect waves-light">Accueil</a>
                    <p>
                    </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="<?= $wURL ?>assets/resources/hterr/js/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="<?= $wURL ?>assets/resources/hterr/js/materialize.js"></script>
  <script type="text/javascript" src="<?= $wURL ?>assets/resources/hterr/js/prism.js"></script>
  <script type="text/javascript" src="<?= $wURL ?>assets/resources/hterr/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script type="text/javascript" src="<?= $wURL ?>assets/resources/hterr/js/plugins.js"></script>
  <script type="text/javascript">
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>
