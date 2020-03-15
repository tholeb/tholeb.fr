<?php
header('Content-Type: application/json; charset=utf-8');
// Attempt to connect to the website database

include('../config/database.php');

 $sth = $bdd->prepare("SELECT * FROM police_bdd ORDER BY CreationTimestamp");
 $sth->execute();
 $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
	print json_encode($result);

?>
