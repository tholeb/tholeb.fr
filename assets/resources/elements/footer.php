<footer class="page-footer grey darken-7">
  <div class="container">
    <div class="row">
      <div class="col l4 s12 animate fadeInLeftBig <?php echo $file == "error" ? "hide" : ''; ?>">
        <h5 class="white-text"><i class="material-icons grey-text center">help</i> Who am I ?</h5>
        <p class="grey-text text-lighten-4">I'm a eighteen year old high school student, passionate about HighTechs, computer science, and video games. I love discovering and learning new things by myself.</p>
      </div>
      <div class="col l8 s12 animate fadeInRightBig <?php echo $file == "error" ? "hide" : ''; ?>">
        <h5 class="white-text"><i class="material-icons grey-text center">web</i> About this website</h5>
        <p class="grey-text text-lighten-4">
          This website has been designed on a KUbuntu 19.10 Virtual Machine using <a href="https://atom.io/" class="grey-text"><i class="fas fa-atom"></i> Atom IDE</a>.
          This website uses the github's API and the CodeTabs' API.
          Find the <a class="grey-text" href="https://github.com/tholeb" ><i class="fab fa-github"></i> Github</a> of the project <a class="grey-text" href="https://github.com/tholeb/tholeb.fr" >here</a>.
        </p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <script language="JavaScript">
        function y2k(number) {
          return (number < 1000) ? number + 1900 : number;
        }
        var today = new Date();
        var year = y2k(today.getYear());
        document.write('<span class="left grey-text animate fadeInLeft">© ' + year + ' <a href="https://github.com/tholeb/" class="gituser">Thomas "tholeb" Lebreton</a> - All Rights Reserved</span>');
      </script>
      <span class="right animate fadeInRight">
        <a class="mailto footer-icons" href="mailto:tholeb.pro@gmail.com"><i class="far fa-envelope"></i></a>
        <a class="github footer-icons" href="https://github.com/tholeb/" ><i class="fab fa-github"></i></a>
        <a class="twitter footer-icons" href="https://twitter.com/tholeb_"><i class="fab fa-twitter"></i></a>
        <a class="licence footer-icons modal-trigger" href="#license">MIT License</a>
      </span>
    </div>
  </div>
</footer>
<div id="license" class="modal bottom-sheet grey lighten-4">
  <div class="modal-content">
    <h4>MIT LICENSE <a href="#!" class="modal-close right"><span class="material-icons black-text center">close</span></a></h4>
    <iframe src="https://tholeb.github.io/tholeb.fr/" style="width:100%; height:30vh; border:none;">
      <p>Your browser does not support iframes.</p>
    </iframe>
  </div>
</div>
