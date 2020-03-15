<ul id="community" class="dropdown-content blue-grey darken-4">
    <?php include($aURL . 'assets/resources/elements/header/nav/community.php'); ?>
</ul>
<ul id="business" class="dropdown-content blue-grey darken-4">
    <?php include($aURL . 'assets/resources/elements/header/nav/business.php'); ?>
</ul>
<ul id="server" class="dropdown-content blue-grey darken-4">
    <?php include($aURL . 'assets/resources/elements/header/nav/server.php'); ?>
</ul>
<?php if ($file != "index"): ?>
    <div class="navbar-fixed">
<?php endif; ?>
    <nav class="blue-grey darken-4 z-depth-1 <?php echo $file == "index" ? "navindex" : ''; ?>" style="z-index:10!important;">
        <div class="nav-wrapper">
            <a href="#" data-target="sidenav" class="left show-on-medium-and-down hide-on-large-only brand-logo white-text"><img src="<?= $wURL ?>assets/img/logo/logo.png" alt="logo" style="height:60px;"></a>
            <a href="#" data-target="sidenav" class="sidenav-trigger right show-on-medium-and-down brand-logo white-text"><i class="material-icons right">menu</i></a>
            <ul class="left hide-on-med-and-down ">
                <li class="<?php echo $file == "index" ? "active" : ''; ?>"><a href="<?= $indexLink; ?>" class="white-text tooltipped" data-position="bottom" data-tooltip="Accueil"><i class="material-icons center">home</i> </a></li>
                <li><a class="white-text tooltipped" data-position="bottom" data-tooltip="Wiki" href="<?= $wikiLink ?>"><i class="material-icons center">live_help</i> </a></li>
                <li><a class="white-text tooltipped" data-position="bottom" data-tooltip="Lifeinvader" href="<?= $lifeInvaderLink; ?>"><i class="material-icons center">share</i> </a></li>
                <li><a class="white-text tooltipped" data-position="bottom" data-tooltip="Panel administrateur" href="<?= $adminLink ?>"><i class="material-icons center">security</i> </a></li>
            </ul>
            <ul class="right hide-on-med-and-down ">
                <li class="<?php echo $file == "bus" ? "active" : ''; ?>"><a class="dropdown-trigger white-text tooltipped" data-position="bottom" data-tooltip="Entreprises" href="#!" data-target="business"><i class="material-icons center">business</i> </a></li>
                <li class="<?php echo $file == "cm" ? "active" : ''; ?>"><a class="dropdown-trigger white-text tooltipped"  data-position="bottom" data-tooltip="Communauté" href="#!" data-target="community"><i   class="material-icons center">build</i> </a></li>
                <li class="<?php echo $file == "server" ? "active" : ''; ?>"><a class="dropdown-trigger white-text tooltipped"  data-position="bottom" data-tooltip="Serveur" href="#!" data-target="server"><i class="fas fa-server material-icons center"></i> </a></li>
            </ul>
        </div>
        <div id="scroll-line" class="blue-grey darken-4">
            <div class="scroll-line"></div>
        </div>
    </nav>
<?php if ($file != "index"): ?>
    </div>
<?php endif; ?>


<ul id="sidenav" class="sidenav blue-grey darken-4">
    <li>
        <div class="user-view">
            <div class="background">
              <img src="<?= $randomImageParallax ?>" alt="background">
            </div>
            <a href="#">
            </a>
            <a href="">
                <span class="white-text name">
                </span>
            </a>
            <a href="">
                <span class="white-text email">

                </span>
            </a>
        </div>
    </li>
    <div class="show-on-medium-and-down hide-on-large-only">
        <li><a href="<?= $indexLink ?>" class="collapsible-header white-text"><i   class="material-icons white-text left">home</i>Accueil</a></li>
        <li><a class="collapsible-header white-text" href="<?= $wikiLink ?>"><i class="material-icons white-text left">live_help</i>Wiki</a></li>
        <li><a class="collapsible-header white-text" href="<?= $lifeInvaderLink ?>"><i class="material-icons white-text left">share</i>LifeInvader</a></li>
        <li><a class="collapsible-header white-text" href="<?= $adminLink ?>"><i class="material-icons white-text">security</i>Panel d'administration</a></li>
        <li><a class="collapsible-header white-text" href="<?= $changelogLink; ?>"><i class="material-icons white-text left">change_history</i> Changelogs</a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header white-text"><i
                            class="material-icons left white-text">business</i>Entreprises<i
                            class="material-icons right white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul class="blue-grey darken-4">
                            <?php include($aURL . 'assets/resources/elements/header/nav/business.php'); ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header white-text"><i
                            class="material-icons left white-text">build</i>Serveur<i
                            class="material-icons right white-text">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                        <ul class="blue-grey darken-4">
                            <?php include($aURL . 'assets/resources/elements/header/nav/community.php'); ?>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </div>
    <?php $cop="" ?>
    <?php if($file="bus" && $cop = "1"): ?>
      <div>
        <li><a class="collapsible-header white-text" href="<?= $wikiLink ?>"><i class="material-icons white-text left">live_help</i>Wiki</a></li>
        <li><a class="collapsible-header white-text" href="<?= $lifeInvaderLink ?>"><i class="material-icons white-text left">share</i>LifeInvader</a></li>
        <li><a class="collapsible-header white-text" href="<?= $adminLink ?>"><i class="material-icons white-text">security</i>Panel d'administration</a></li>
      </div>
    <?php endif; ?>
    <li class="no-padding"><a class="collapsible-header white-text" href="<?= $wURL; ?>user/"><i
                class="material-icons white-text left">person</i> Mon compte </a></li>
   <!--  <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header white-text"><i
                        class="material-icons left white-text">brightness_medium</i>Thème</a>
                <div class="collapsible-body">
                    <ul class="blue-grey darken-4">
                        <div class="container">
                            <div class="row">
                                <div class="switch center">
                                    <label>
                                        <i class="material-icons white-text">brightness_high</i> On
                                        <input type="checkbox" id="light-switch">
                                        <span class="lever"></span>
                                        <i class="material-icons white-text">brightness_low</i> Off
                                    </label>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </li>
        </ul>
    </li> -->
    <!-- <li><a href="#login" class="waves-effect waves-dark btn btn-small grey darken-3 modal-trigger show-on-medium-and-up hide-on-small-only">Panel</a></li> -->
</i>
