<?php
  $file = "error";
  require 'config.php';
  include($aURL . "assets/resources/config/config.php");
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <?php include($aURL.'assets/resources/meta/head.php') ?>
      <title>tholeb.fr</title>
      <style media="screen">
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }

      main {
        flex: 1 0 auto;
      }
      .container_center {
        position: absolute;
        top: 46%;
        left: 50%;
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
      }
      </style>
    </head>

    <body class="grey darken-6" style="overflow-x:hidden;">
      <main>
        <?php if (isset($_GET['error']) && $_GET['error'] == 404): ?>
          <div class="container container_center">
            <div class="row">
              <h3 class="white-text center"> Error 404: Page Not Found</h3> <br> <br>
            </div>
            <div class="row">
              <p class="center"><img src="assets/img/errors/404.png" alt="404"></p> <br> <br>
            </div>
            <div class="row">
              <h6 class="white-text center"> Sorry, the page you're looking for cannot be accessed or doesn't exits. <br> Either check the URL, <a href="<?= $wURL ?>" class="teal-text text-lighten-2">go home <i class="fas fa-home"></i></a>, or feel free to <a href="mailto:tholeb.pro@gmail.com" class="teal-text text-lighten-2">report this issue <i class="fas fa-bug"></i></a>.</h6>
            </div>
          </div>
        <?php elseif (isset($_GET['error']) && $_GET['error'] == 403): ?>
          <div class="container container_center">
            <div class="row">
              <h2 class="white-text center"> Error 403: Forbidden</h2> <br> <br>
            </div>
            <div class="row ">
              <p class="center"><img src="<?= $wURL ?>assets/img/errors/403.png" alt="404"></p> <br> <br>
            </div>
            <div class="row">
              <h6 class="white-text center"> Sorry, access to this resource on the server is denied. <br> Either check the URL, <a href="<?= $wURL ?>" class="teal-text text-lighten-2">go home <i class="fas fa-home"></i></a>, or feel free to <a href="mailto:tholeb.pro@gmail.com" class="teal-text text-lighten-2">report this issue <i class="fas fa-bug"></i></a>.</h6>
            </div>
          </div>
        <?php elseif (isset($_GET['error']) && $_GET['error'] == 500 || isset($_GET['error']) && $_GET['error'] = 503): ?>
          <div class="container container_center">
            <div class="row">
              <h2 class="white-text center"> Error 500: Unexpected Error</h2> <br> <br>
            </div>
            <div class="row">
              <p class="center"><img src="<?= $wURL ?>assets/img/errors/500.png" alt="404"></p> <br> <br>
            </div>
            <div class="row">
              <h6 class="white-text center"> An error ocurred and your request couldn't be completed. <br> Either check the URL, <a href="<?= $wURL ?>" class="teal-text text-lighten-2">go home <i class="fas fa-home"></i></a>, or feel free to <a href="mailto:tholeb.pro@gmail.com" class="teal-text text-lighten-2">report this issue <i class="fas fa-bug"></i></a>.</h6>
            </div>
          </div>
        <?php else: ?>
          <div class="container container_center">
            <div class="row">
              <h2 class="white-text center"> Wait a minute!</h2> <br> <br>
            </div>
            <div class="row">
              <p class="center"><img src="https://i.pinimg.com/originals/5c/42/ca/5c42cad93c2d850ea46504e8470ab8a4.gif" alt="Nope"></p> <br> <br>
            </div>
            <div class="row">
              <h6 class="white-text center"> Are you trying to break the website ? that's not very nice of you :'(</h6>
            </div>
          </div>
          <audio autoplay>
            <source src="https://www.myinstants.com/media/sounds/stop_ZnQ9jIO.mp3" type="audio/mp3">
            Your browser does not support the audio element.
          </audio>
        <?php endif; ?>
      </main>
      <?php include($aURL.'assets/resources/elements/footer.php') ?>
      <?php include($aURL.'assets/resources/meta/scripts.php') ?>
      <script type="text/javascript">
      $(document).ready(function() {
        $('img').each(function() {
            var maxWidth = 300; // Max width for the image
            var maxHeight = 300;    // Max height for the image
            var ratio = 0;  // Used for aspect ratio
            var width = $(this).width();    // Current image width
            var height = $(this).height();  // Current image height

            // Check if the current width is larger than the max
            if(width > maxWidth){
                ratio = maxWidth / width;   // get ratio for scaling image
                $(this).css("width", maxWidth); // Set new width
                $(this).css("height", height * ratio);  // Scale height based on ratio
                height = height * ratio;    // Reset height to match scaled image
                width = width * ratio;    // Reset width to match scaled image
            }

            // Check if current height is larger than max
            if(height > maxHeight){
                ratio = maxHeight / height; // get ratio for scaling image
                $(this).css("height", maxHeight);   // Set new height
                $(this).css("width", width * ratio);    // Scale width based on ratio
                width = width * ratio;    // Reset width to match scaled image
                height = height * ratio;    // Reset height to match scaled image
            }
        });
      });
      </script>
    </body>
  </html>
