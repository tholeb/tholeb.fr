<?php
$botToken = "";

if ($_SERVER['HTTP_HOST'] == 'vlife.fr/' || $_SERVER['HTTP_HOST'] == 'vlife.tk/') {
    $username = "";
    $password = "";
    $hostname = "";
    $namebase = "";

    // // // // // // // // // // // // // // // // // // // // // // //

    $username2 = "";
    $password2 = "";
    $hostname2 = "";
    $namebase2 = "";
  }
  else {
    $username = "";
    $password = "";
    $hostname = "";
    $namebase = "";

    // // // // // // // // // // // // // // // // // // // // // // //

    $username2 = "phpmyadmin";
    $password2 = "admin";
    $hostname2 = "localhost";
    $namebase2 = "essentialmode";
  }

  try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
  catch (PDOException $e)
 {
  // If an error is thrown, display the message
  die('Erreur : ' . $e->getMessage());
  echo 'Échec lors de la connexion ' . $namebase . ': ' . $e->getMessage();
 }
 // Attempt to connect to the fivem server database
 try
  {
    $bdd2 = new PDO('mysql:host='.$hostname2.';dbname='.$namebase2.'', $username2, $password2);
    $bdd2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
   catch (PDOException $e)
  {
   // If an error is thrown, display the message
   die('Erreur : ' . $e->getMessage());
   echo 'Échec lors de la connexion'.$namebase2.' : ' . $e->getMessage();
  }
?>
