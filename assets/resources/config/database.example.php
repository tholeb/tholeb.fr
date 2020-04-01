<?php
$username = "phpmyadmin";
$password = "admin";
$hostname = "localhost";
$namebase = "tholeb.fr";


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
?>
