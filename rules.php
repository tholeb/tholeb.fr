<?php
$file = "server";
require 'steamauth/steamauth.php';
require 'config.php';
include($aURL . "assets/resources/config/config.php");
include($aURL . "assets/resources/config/fetch.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include($aURL . 'assets/resources/meta/head/head.php'); ?>
    <title><?= $GLOBAL['title'] ?> | Règlement</title>
    <link rel="icon" type="image/png" href="<?= $wURL ?>assets/img/logo/logo.png">
</head>

<body class="grey darken-3">
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <header>
        <?php include($aURL . 'assets/resources/elements/header/header.php'); ?>
    </header>
    <main>
        <div class="parallax-container" style="height:350px;">
            <div class="container">
                <div class="section no-pad-bot">
                    <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:5%;"><span class="neon">Règlement et sanctions</span></h2> <br> <br> <br>
                </div>
            </div>
            <div class="parallax">
                <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
            </div>
        </div>
        <nav>
        <div class="nav-wrapper">
            <div class="col s12 blue-grey darken-4 z-depth-4">
                <a href="<?= $wURL ?>" class="breadcrumb" style="padding-left:10px;">Accueil</a>
                <a href="<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"] ?>" class="breadcrumb">Règlement et sanctions</a>
                </div>
            </div>
        </nav> <br> <br>
        <div class="section">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m4 l4 offset-l2 offset-m4 white-text left-align animate fadeInLeftBig">
                        <h5><i class="fas fa-users-cog"></i> Staff</h5>
                        <p> Attention l'équipe de VLife veille au grain alors pas de bétises! Si vous souhaitez signaler quelqu'un, vous pouvez MP le <a href="https://discordapp.com/channels/@me/597479090408259617" class="purple-text text-accent-3">bot support</a> avec votre message ainsi qu'avec le nom de la personne en faute.</p>
                        <h5><i class="fas fa-times"></i> Sanctions</h5>
                        <p> L'équipe de VLife prête attention a tout, et veux garder un serveur <span class="purple-text text-accent-3">100% roleplay</span>, c'est pourquoi nous mettons en place une liste de sanctions, celle ci est non éxhaustive. Les peines affichés sont les peines maximale.</p>
                    </div>
                    <div class="col s12 m4 l4 hide-on-small-and-med animate fadeInRightBig">
                        <img src="<?= $wURL ?>assets/img/characters/tempenny.png" alt="yusuf" style="height:400px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="container animate fadeInLeftBig"><div class="row"><div class="divider"></div></div></div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col l12 s12 m12 center animate fadeInUpBig">
                        <a href="https://docs.google.com/spreadsheets/d/1gJCHpXbStiXatcTIV0NUSKvRX1B65D6lvUrGPm_P9wU/edit?usp=sharing" class="waves-effect waves-light btn grey darken-4">Cliquez pour voir le fichier source</a>
                    </div>
                </div>
                <div class="row center">
                    <div class="col s12 m12 l12 white-text center-align animate fadeInLeftBig">
                        <iframe class="responsive-video " style="width:100%; height:80vh" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTA9mcshpJrmwYqheu6a2RCoPqn3_1pPRDOXLpqf4lIvCnEMNfBWwvOY9Zocdhit0PjM_ddvaZpaFQQ/pubhtml?widget=true&amp;headers=false">Désolé votre navigateur de supporte pas les iframes... :/</iframe>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['steamid']) && $userinfo['admin'] == 1 && $_SESSION['steamid'] > 0): ?>
            <div class="parallax-container" style="height:350px;">
                <div class="container">
                    <div class="section no-pad-bot">
                        <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:5%;"><span class="neon">Espace STAFF</span></h2> <br> <br> <br>
                    </div>
                </div>
                <div class="parallax">
                    <img src="<?= $randomImageParallax ?>" alt="background image missing please contact an admin">
                </div>
            </div>
            <?php
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // define variables and set to empty values
            $input_text = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input_text = test_input($_POST["input_text"]);
                //$webhookurl = "https://discordapp.com/api/webhooks/658449015901519905/iVE6r4da742XNtnkrRozgLKIsg3bBVRNxMRp1ltIRzwshGyfY0dUqznQZYZ7jrLTTvhc"; //test
                $webhookurl = "https://discordapp.com/api/webhooks/658428354059436033/eAYDr8Q7qO7ei8jtfRa_dAvPkoEmXVwvFRxwGv8h5NA0og94YENnV0WBkr5AjPw2IjHX"; //prod
                $msg = "**Changement dans le règlement: **".$input_text . " par *". $userinfo['steamname']."*";
                $json_data = array ('content'=>"$msg");
                $make_json = json_encode($json_data);
                $ch = curl_init( $webhookurl );
                curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                curl_setopt( $ch, CURLOPT_POST, 1);
                curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt( $ch, CURLOPT_HEADER, 0);
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec( $ch );
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }

            ?>
            <div class="container">
                <div class="row">
                    <div class="card grey darken-4">
                        <div class="card-content white-text">
                            <span class="card-title">Espace Staff</span>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <div class="row">
                                <div class="input-field col l5 s12 animate fadeInLeftBig">
                                    <i class="fas fa-users-cog prefix material-icons"></i>
                                    <label>
                                        <input type="checkbox" class="filled-in checkbox-purple" name="rules_check" id="check"/>
                                        <span>Changement du règlement (attention, cela va envoyer un message dans le chat Discord)</span>
                                    </label>
                                </div>
                                <div class="input-field col l6 s12 m6 animate fadeInRightBig">
                                    <i class="material-icons prefix">short_text</i>
                                    <textarea id="input_text" type="text"  class="validate charcount validate materialize-textarea" disabled name="input_text" data-length="60"></textarea>
                                    <label for="input_text">Message (court)</label>
                                </div>
                                <div class="input-field col l1 s12 m6 animate fadeInRight">
                                    <button type="submit" class="btn waves-effect waves-light grey darken-5 btn-small disabled required" id="submit_text">
                                        <i class="material-icons center">send</i>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
    <footer class="page-footer grey darken-6">
        <?php include($aURL . 'assets/resources/elements/footer/footer.php');  ?>
    </footer>
    <?php include($aURL . 'assets/resources/meta/scripts/scripts.php');  ?>
    <script type="text/javascript" src="<?= $wURL ?>assets/js/discord.11.5.min.js"></script>
    <script>
        $("#check").on("change", function() {
        if (this.checked) {
            $("#input_text").prop("disabled", false);
            $("#submit_text").removeClass("disabled");
        } else {
            $("#input_text").prop("disabled", true);
            $("#submit_text").addClass("disabled");
        }
        });
    </script>
</body>

</html>
