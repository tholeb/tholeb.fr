<?php if ($file != "index"): ?>
    <div class="navbar-fixed">
<?php endif; ?>
      <nav class="grey darken-7 <?php echo $file == "index" ? "navindex" : ''; ?>">
        <div class="nav-wrapper">
          <a href="#" data-target="sidenav" class="sidenav-trigger"><i class="material-icons grey-text">menu</i></a>
          <ul class="left hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>" class="tooltipped" data-position="bottom" data-tooltip="Home"><i class="material-icons grey-text center">home</i></a></li>
            <li><a href="<?= $wURL; ?>#about" class="tooltipped" data-position="bottom" data-tooltip="About"><i class="material-icons grey-text center">help</i></a></li>
            <li><a href="<?= $wURL; ?>#github" class="tooltipped" data-position="bottom" data-tooltip="Github"><i class="fab fa-github grey-text material-icons center"></i></a></li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li><a href="<?= $wURL; ?>projects" class="tooltipped" data-position="bottom" data-tooltip="My Project"><i class="material-icons grey-text center">code</i></a></li>
            <li><a href="mailto:tholeb.pro@gmail.com" class="tooltipped" data-position="bottom" data-tooltip="Contact me"><i class="far fa-envelope material-icons grey-text center"></i></a></li>
            <li><a href="<?= $wURL; ?>cv" class="tooltipped" data-position="bottom" data-tooltip="Curriculum Vitae"><i class="fas fa-address-book material-icons grey-text center"></i></a></li>
          </ul>
        </div>
        <div id="scroll-line" class="grey darken-7">
            <div class="scroll-line"></div>
        </div>
      </nav>
<?php if ($file != "index"): ?>
    </div>
<?php endif; ?>
<ul class="sidenav grey darken-7" id="sidenav">
  <li><a href="sass.html" class="grey-text">Sass</a></li>
  <li><a href="badges.html">Components</a></li>
  <li><a href="collapsible.html">Javascript</a></li>
  <li><a href="mobile.html">Mobile</a></li>
</ul>
