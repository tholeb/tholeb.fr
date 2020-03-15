<?php
if(isset($_SESSION['steamid']) and $_SESSION['steamid'] > 0){
  $steamid = $_SESSION['steamid'];
  $query = $bdd->query("SELECT * FROM users WHERE steamid = '$steamid';");
  $userinfo = $query->fetch();
  $hexsteam = "steam:".$steamid;
  $query = $bdd2->query("SELECT * FROM users WHERE identifier = '$hexsteam';");
  $userinfo2 = $query->fetch();
}
?>
