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
    <title><?= $GLOBAL['title'] ?> | Changelogs</title>
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
                    <h2 class="white-text center bebas" style="letter-spacing:1rem;margin-top:5%;"><span class="neon">Changelogs</span></h2> <br> <br> <br>
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
                <a href="<?= "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"] ?>" class="breadcrumb">Changelogs</a>
                </div>
            </div>
        </nav> <br> <br>
        <div class="section">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m6 l4 offset-l2 white-text left-align animate fadeInLeftBig">
                        <h5><i class="fas fa-cogs"></i> Changements</h5>
                        <p> L'équipe de VLife <span class="text-accent-3 purple-text">développe constament de nouvelles features</span> pour le serveur. C'est pour quoi nous tenons une liste des différents changelogs. Ceux ci sont aussi disponibles dans le salon <a href="https://discordapp.com/channels/617016532706525205/660251778654404681" class="purple-text text-accent-3">#changelog</a></p>
                        <h5><i class="fas fa-bug"></i> Bugs</h5>
                        <p> Derrière l'équipe de VLife se cache non pas des petits génies (quoi que 🤔...) mais des humains, et comme on dit l'erreur est humaine... il se peut donc que durant vos sessions de jeu vous rencontriez des bugs. Si vous en trouvez un, signalez le aux développeurs dans le salon <a href="https://discordapp.com/channels/617016532706525205/617403616969359467" class="purple-text text-accent-4">#crash-bug-report</a>!</p>
                    </div>
                    <div class="col s12 m6 l4 hide-on-small-and-med animate fadeInRightBig">
                        <img src="<?= $wURL ?>assets/img/characters/lester.png" alt="yusuf" style="height:400px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <ul class="tabs tabs-fixed-width grey darken-5 z-depth-1">
                    <li class="tab"><a class="active" href="#serveur">Serveur</a></li>
                    <li class="tab"><a href="#website">Site internet</a></li>
                </ul>
                <div id="serveur" class="col s12">
                    <div class="row">
                        <?php
                        // Get contents of the lspd table
                        $reponse = $bdd->query('SELECT * FROM changelogs WHERE type = "server" ORDER BY releasedate DESC');
                        // Display each entry one by one
                        while ($data = $reponse->fetch()) {
                        ?>
                        <div id="<?= $data['id'] ?>" class="modal grey darken-4">
                            <div class="modal-content">
                                <h4 class="white-text"><?= $data['release_title'] ?><a class="right modal-close white-text" href="#!"><i class="material-icons">close</i></a></h4>
                                <?php if (!empty($data['image']) && isset($data['image'])): ?>
                                    <div class="container"><div class="row center"><img src="<?= $data['image'] ?>" alt="image de la version <?= $data['version'] ?>" style="width:50%"></div></div>
                                <?php endif; ?>
                                <p class="white-text"><?= $data['content_html'] ?></p>
                            </div>
                            <div class="modal-footer grey darken-5">
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat left">Mise à jour effectué le <?= $data['releasedate'] ?></a>
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat">Version <?= $data['version'] ?></a>
                            </div>
                        </div>
                        <div id="<?= $data['id'] ?>" class="modal grey darken-4">
                            <div class="modal-content">
                                <h4 class="white-text"><?= $data['release_title'] ?></h4>
                                <p class="white-text"><?= $data['content_html'] ?></p>
                            </div>
                            <div class="modal-footer grey darken-5">
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat left">Mise à jour effectué le <?= $data['releasedate'] ?></a>
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat">Version <?= $data['version'] ?></a>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <div class="card grey darken-4">
                                <?php if (!empty($data['image']) && isset($data['image'])): ?>
                                <div class="card-image">
                                    <img src="<?= $data['image'] ?>">
                                    <span class="card-title white-text"><?= $data['release_title'] ?></span>
                                </div>
                                <?php endif; ?>
                                <div class="card-content white-text">
                                    <?php if (empty($data['image']) || !isset($data['image'])): ?>
                                        <span class="card-title white-text"><?= $data['release_title'] ?></span>
                                    <?php endif; ?>
                                    <p class="white-text changelogs_text"><?= $data['content_html'] ?></p> <br>
                                    <center><a class="modal-trigger purple-text text-accent-3" href="#<?= $data['id'] ?>">En savoir plus</a></center>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="purple-text text-accent-3"><span class="white-text">MàJ le </span><?= $data['releasedate'] ?></a>
                                    <a href="#" class="purple-text text-accent-3 right"><span class="white-text">Version </span><?= $data['version'] ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        $reponse->closeCursor(); ?>
                    </div>
                </div>
                <div id="website" class="col s12">
                    <div class="row">
                        <?php
                        // Get contents of the lspd table
                        $reponse = $bdd->query('SELECT * FROM changelogs WHERE type = "website" ORDER BY releasedate DESC');
                        // Display each entry one by one
                        while ($data = $reponse->fetch()) {
                        ?>
                        <div id="<?= $data['id'] ?>" class="modal grey darken-4">
                            <div class="modal-content">
                                <h4 class="white-text"><?= $data['release_title'] ?></h4>
                                <p class="white-text"><?= $data['content_html'] ?></p>
                            </div>
                            <div class="modal-footer grey darken-5">
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat left">Mise à jour effectué le <?= $data['releasedate'] ?></a>
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat">Version <?= $data['version'] ?></a>
                            </div>
                        </div>
                        <div id="<?= $data['id'] ?>" class="modal grey darken-4">
                            <div class="modal-content">
                                <h4 class="white-text"><?= $data['release_title'] ?></h4>
                                <p class="white-text"><?= $data['content_html'] ?></p>
                            </div>
                            <div class="modal-footer grey darken-5">
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat left">Mise à jour effectué le <?= $data['releasedate'] ?></a>
                                <a href="#!" class="modal-close waves-effect waves-white btn-flat">Version <?= $data['version'] ?></a>
                            </div>
                        </div>
                        <div class="col l4 m6 s12">
                            <div class="card grey darken-4">
                                <?php if (!empty($data['image']) && isset($data['image'])): ?>
                                <div class="card-image">
                                    <img src="<?= $data['image'] ?>">
                                    <span class="card-title white-text"><?= $data['release_title'] ?></span>
                                </div>
                                <?php endif; ?>
                                <div class="card-content white-text">
                                    <?php if (empty($data['image']) || !isset($data['image'])): ?>
                                        <span class="card-title white-text"><?= $data['release_title'] ?></span>
                                    <?php endif; ?>
                                    <p class="white-text changelogs_text"><?= $data['content_html'] ?></p> <br>
                                    <center><a class="modal-trigger purple-text text-accent-3" href="#<?= $data['id'] ?>">En savoir plus</a></center>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="purple-text text-accent-3"><span class="white-text">MàJ le </span><?= $data['releasedate'] ?></a>
                                    <a href="#" class="purple-text text-accent-3 right"><span class="white-text">Version </span><?= $data['version'] ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        $reponse->closeCursor(); ?>
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
</body>

</html>
