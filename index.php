<?php
  $file = "index";
  require 'config.php';
  include($aURL . "assets/resources/config/config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include($aURL . 'assets/resources/meta/head/head.php'); ?>
    <title><?= $GLOBAL['title'] ?> | Accueil</title>
    <link rel="icon" type="image/png" href="<?= $wURL; ?>assets/img/logo/logo.png">
</head>
<body class="grey darken-3">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="slider fullslider">
        <ul class="slides">
            <li>
                <img src="assets/img/slider/wallpaper.jpg" class="paraslider"> <!-- random image -->
                <div class="caption">
                    <h2 class="white-text center bebas hide-on-med-and-down" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">Bienvenue sur</h2>

                    <div class="row">
                        <div class="col l9 offset-l4">
                            <img src="assets/img/logo/logo.png" style="width:45%;height:45%" class="center hide-on-med-and-down" alt="logo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <img src="assets/img/logo/logo.png" class="center hide-on-large-only show-on-medium-and-down" alt="logo">
                        </div>
                    </div>
                    <h4 class="white-text center bebas" style="letter-spacing:1rem;"><span class="neon">Découvrez un nouveau</span> <span class="purple-text text-accent-3 neonprpl">ROLEPLAY</span><span class="neon"> !</span></h4>
                    <br>
                    <div class="row">
                        <div class="col l5">
                            <div class="hide-on-med-and-down right">
                                <a href="<?= $connectLink ?>" class="waves-effect pulse waves-light btn-large grey darken-3 grey-text text-lighten-4 z-depth-5" target="_blank">Jouer maintenant!</a>
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
                <img src="https://thumbs.dreamstime.com/b/coding-hacker-concept-abstract-source-code-background-technology-javascript-bracket-software-127601418.jpg" class="paraslider"> <!-- random image -->
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
                                                <a class="white-text " href=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l5">
                                <div class="hide-on-med-and-down right">
                                    <a href="<?= $connectLink ?>" class="waves-effect pulse waves-light btn-large grey darken-3 grey-text text-lighten-4 z-depth-5" target="_blank">Jouer maintenant!</a>
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
                </div>
            </li>
            <li>
                <img src="<?= $wURL; ?>assets/img/slider/wallpaper_cops.png" class="paraslider"> <!-- random image -->
                <div class="caption right-align">
                    <h2 class="white-text right bebas" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">Choisissez votre <span class="purple-text text-accent-3 neonprpl">vie</span>!</span></h2>
                </div>
            </li>
            <li>
                <img src="<?= $wURL; ?>assets/img/slider/wallpaper_illegal.png" class="paraslider"> <!-- random image -->
                <div class="caption left-align">
                    <h2 class="white-text left bebas" style="letter-spacing:1rem;margin-top:-5%;"><span class="neon">Choisissez votre <span class="purple-text text-accent-3 neonprpl">camp</span>!</span></h2>
                </div>
            </li>
        </ul>
    </div>
    <header>
        <?php include($aURL . 'assets/resources/elements/header/header.php'); ?>
    </header>
    <main>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12 center">
                        <img src="<?= $wURL ?>assets/img/logo/logo.png" style="width:30%;" class="center animate fadeInLeftBig">
                        <br>
                    </div>
                    <h3 class="white-text center animate fadeInLeftBig">Pourquoi nous rejoindre... </h3>
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
                                <h2 class="center purple-text text-accent-3"><i class="material-icons medium fas fa-user-tag"></i></h2>
                                <h5 class="center white-text">Créez votre personnage</h5>
                                <p class="light white-text center">Rejoignez VLife en créant un avatar à votre image, choisissez parmi un catalogue de vêtement et de véhicule inépuisable ! </p>
                            </div>
                        </div>
                        <div class="col s12 m6 l6 xl4">
                            <div class="icon-block">
                                <h2 class="center purple-text text-accent-3"><i class="material-icons medium fas fa-code"></i></h2>
                                <h5 class="center white-text">Développement inédit</h5>
                                <p class="light white-text center">Grâce a une équipe de développeurs compétants et présents, le serveur possède un développement unique et lore-friendly. Tous nos scripts sont uniques, et nous possédons un framework personnalisé totalement conçu par nos devs.</p>
                            </div>
                        </div>
                        <div class="col s12 m12 l12 xl4">
                            <div class="icon-block">
                                <h2 class="center purple-text text-accent-3"><i class="material-icons medium fas fa-mobile-alt"></i></h2>
                                <h5 class="center white-text">Roleplay illimité</h5>
                                <p class="light white-text center">La base du RolePlay est l'interaction avec les joueurs, alors n'ayez pas peur et vienez rencontrer des joueurs sur VLife ! Si vous êtes plus du genre timide, vous pouvez aussi utiliser le <a href="<?= $lifeInvaderLink ?>" class="purple-text text-accent-3">LifeInvader</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row animate fadeInUp">
                        <h6 class="white-text center">Lancé le 29 Août (2019), VLife cherche au plus a créer un serveur <span class="purple-text text-accent-3">unique</span>, <span class="purple-text text-accent-3">Lore-Friendly</span>, et <span class="purple-text text-accent-3">RolePlay</span>. Ici, vous pouvez arborer la vie que vous souhaitez</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m4 l4 offset-l2 offset-m4 white-text left-align animate fadeInLeftBig">
                        <h5><i class="icofont-business-man"></i> Légal</h5>
                        <p> Vous êtes du genre honnête? Alors rejoignez le LSPD ou les autres entreprises. Los santos propose un grand nombre de loisirs, comme les bars, les cinémas, le golf, le ténis, etc... Alors profitez-en et éclatez vous!</p>
                        <h5><i class="icofont-drug"></i> Illégal</h5>
                        <p> Vous chercher à devenir l'homme le plus puissant du pays par n'importe quel moyen? Rejoignez l'illégal, Los Santos propose un bon nombre de traffic (ecstasy, coke, meth, weed, armes,...) mais aussi d'autres activités... Attention aux Forces de l'ordres, la note peut être salée.</p>
                        <h5><i class="icofont-ui-social-link"></i> LifeInvader</h5>
                        <p> Vous chezchez des ami(e)s, des soirées, ou juste de la compagnie ? Alors rejoignez le <a href="<?= $lifeInvaderLink ?>" class="purple-text text-accent-3">LifeInvader</a>! Vous trouverez tout ce que vous cherchez... et peut être même plus. </p>
                    </div>
                    <div class="col s12 m4 l4 hide-on-small-and-med animate fadeInRightBig">
                        <img src="<?= $wURL ?>assets/img/characters/yusuf.png" alt="yusuf">
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m4 l4 hide-on-small-and-med animate fadeInLeftBig">
                        <img src="<?= $wURL ?>assets/img/characters/luiz.png" alt="yusuf">
                    </div>
                    <div class="col s12 m4 l4 offset-l2 offset-m4 white-text right-align animate fadeInRightBig">
                        <h5>Votes Top-serveur <i class="fas fa-vote-yea"></i></h5>
                        <p> Il est important de <a href="<?= $voteLink ?>" class="purple-text text-accent-4">voter</a> sur <a href="<?= $voteLink ?>" class="purple-text text-accent-4">Top-Serveur</a> car ça permet de monter dans le classement et donc d'avoir plus de joueurs donc beaucoup plus de Roleplay; en plus de ca, les personnes ayant le plus voté pendant le mois recevront une récompense.</p>
                        <h5>Donations <i class="fas fa-credit-card"></i></h5>
                        <p> Toutes les <a href="<?= $donsLink ?>" class="purple-text text-accent-4">Donations</a> sont les bienvenues, même les plus petites. Celles-ci nous permettent d'améliorer grandement le serveur (ex: amélioration de la machine). Si vous êtes un donateur, vous aurez accès a certains avantages. <br>(Discord seulement)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-container" style="height:350px;">
            <div class="container">
                <div class="section no-pad-bot">
                    <h4 class="white-text center bebas" style="letter-spacing:1rem;margin-top:5%;"><span class="neon">Qu'est ce que vous attendez,<span class="purple-text text-accent-3 neonprpl">Rejoignez-nous</span>!</span></h4> <br> <br> <br>
                    <div class="row">
                        <div class="col l5">
                            <div class="hide-on-med-and-down right">
                                <a href="<?= $connectLink ?>" class="waves-effect pulse waves-light btn-large grey darken-3 grey-text text-lighten-4 z-depth-5" target="_blank">Jouer maintenant!</a>
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
            </div>
            <div class="parallax">
                <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
            </div>
        </div>
    </main>
    <footer class="page-footer grey darken-6">
        <?php include($aURL . 'assets/resources/elements/footer/footer.php');  ?>
    </footer>
    <?php include($aURL . 'assets/resources/meta/scripts/scripts.php');  ?>
</body>

</html>
