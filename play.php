<?php
$file = "index";
require 'steamauth/steamauth.php';
require 'config.php';
include($aURL . "assets/resources/config/config.php");
include($aURL . "assets/resources/config/fetch.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include($aURL . 'assets/resources/meta/head/head.php'); ?>
    <title><?= $GLOBAL['title'] ?> | Jouer</title>
    <link rel="icon" type="image/png" href="<?= $wURL ?>assets/img/logo/logo.png">
</head>

<body class="grey darken-3">
    <div class="slider fullslider">
        <ul class="slides">
            <li>
                <img src="<?= $wURL; ?>assets/img/slider/wallpaper.jpg" class="paraslider"> <!-- random image -->
                <div class="caption">
                    <div class="col s12 l12 m12">
                        <h1 class="white-text center bebas" style="letter-spacing:1rem;margin-top:10%;"><span class="neon">Pret à<span class="purple-text text-accent-3 neonprpl">jouer</span>?</span></h1>
                        <h2 class="white-text center bebas" style="letter-spacing:0.5rem;"><span class="neon">Alors rejoins nous!</h2>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col l5">
                            <div class="hide-on-med-and-down right">
                                <a href="#play" class="waves-effect pulse waves-light btn-large grey darken-3 grey-text text-lighten-4 z-depth-5">Jouer maintenant!</a>
                            </div>
                        </div>
                        <div class="col l2"></div>
                        <div class="col l5">
                            <div class="hide-on-med-and-down left">
                                <a href="<?= $discordLink ?>" class="waves-effect pulse waves-light btn-large grey darken-3 grey-text text-lighten-4 z-depth-5" target="_blank">Nous rejoindre!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?= $wURL; ?>assets/img/slider/wallpaper_casino.png" class="paraslider"> <!-- random image -->
                <div class="caption center-align">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 l12 m12">
                                <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">Une nouvelle <span class="purple-text text-accent-3 neonprpl">aventure</span> vous attend !</span></h2>
                                <h5 class="white-text center bebas" style="letter-spacing:0.5rem;padding-top:30vh;"><span class="neon">Faites comme eux, rejoignez nous!</h5>
                                <div class="row">
                                    <div class="col s12 m6 l4 offset-m3 offset-l4">
                                        <div class="card grey darken-6 hoverable z-depth-5">
                                            <div class="card-content white-text center">
                                                <span class="card-title">Joueurs en ligne</span>
                                                <a class="white-text " href=""><?php include($aURL . "assets/resources/config/playercount.php"); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <header>
        <?php include($aURL . 'assets/resources/elements/header/header.php'); ?>
    </header>
    <main>
        <div class="section" style="height:50vh;">
            <div class="container">
                <div class="row" style="padding-top:5%;" id="play">
                    <div class="col s12 m4 l4 offset-l2 offset-m4 white-text left-align animate fadeInLeftBig">
                        <h5><i class="fas fa-gamepad"></i> Il est temps de lancer FiveM!</h5>
                        <p> Rejoins nous pour une expérience unique en son genre!</p>
                        <center><a class="btn waves-effect waves-light pulse btn-flat z-depth-5 white-text" onclick="play()" id="btn_preloader" href="fivem://connect/vlife.fr:30120">Jouer Maintenant!</a>
                        <p class="loading hide" id="p_preloader">La connexion est en cours, patiente un peu, cela peut prendre quelques minutes</p>
                        </center>
                        <h5><i class="fas fa-download"></i> Télécharger FiveM</h5>
                        <p> Vous pouvez télécharger le launcher de FiveM <a href="https://fivem.net" class="purple-text text-accent-3">ici</a>.</p>
                    </div>
                    <div class="col s12 m4 l4 hide-on-small-and-med animate fadeInRightBig">
                        <img src="<?= $wURL ?>assets/img/logo/fivem.png" alt="yusuf">
                        <div class="progress hide" style="top:99.8%;position:fixed;z-index:999!important;" id="preloader">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer grey darken-6">
        <?php include($aURL . 'assets/resources/elements/footer/footer.php');  ?>
    </footer>
    <script>
        function play() {
            M.toast({html: 'Connexion en cours'})
            $("#preloader").removeClass("hide");
            $("#p_preloader").removeClass("hide");
            $("#btn_preloader").addClass("disabled");
        };
    </script>
    <?php include($aURL . 'assets/resources/meta/scripts/scripts.php');  ?>
</body>

</html>
