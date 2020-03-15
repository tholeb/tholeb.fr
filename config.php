<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');
$fileName = basename(__FILE__);
$aURL = dirname(__FILE__)."/";
// $aURL = __DIR__."/";
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
if ($_SERVER['HTTP_HOST'] != 'vlife.fr') {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/tholeb.fr/";
} else {
  $wURL = "$protocol://$_SERVER[HTTP_HOST]/";
}

$GLOBAL['title'] = "tholeb.fr";
//require $aURL.'assets/resources/config/database.php';

// Links
$indexLink = $wURL;
$discordLink = "$protocol://discord.$_SERVER[HTTP_HOST]/";
$wikiLink = "$protocol://wiki.$_SERVER[HTTP_HOST]/";
$lifeInvaderLink = "$protocol://lifeinvader.$_SERVER[HTTP_HOST]/";
$adminLink = "$protocol://admin.$_SERVER[HTTP_HOST]/";
$statsLink = $wURL."user";
$gouvLink = $wURL."government/";
$bcsoLink = $wURL."government/bcso/";
$lspdLink = $wURL."government/lspd/";
$emsLink = $wURL."government/ems/";
$voteLink = "$protocol://vote.$_SERVER[HTTP_HOST]/";
$emsLink = $wURL."government/ems/";
$changelogLink = $wURL."changelog";
$connectLink = $wURL."play";
$rulesLink = $wURL."reglement";
$donsLink =$wURL."donations";
$foodLink = $wURL."shops/burger-shot/";
$shopsLink = $wURL."shops/";
$gunShopLink = $wURL."shops/gun-shop/";
$carShopLink = $wURL."shops/car-shop/";
$whitelistLink = "$wURL.shops/car-shop/";
?>
