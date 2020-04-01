<?php
header('Content-Type: text/html; charset=utf-8');
$fileName = basename(__FILE__);
$aURL = dirname(__FILE__)."/";
// $aURL = __DIR__."/";
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
if ($_SERVER['HTTP_HOST'] != 'tholeb.fr') {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/" . basename(__DIR__) . "/";
} else {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/";
}
require $aURL.'assets/resources/config/database.php';
$GLOBAL['title'] = "tholeb.fr";
?>
