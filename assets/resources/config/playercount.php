<?php
/*-----------------------[ SETTINGS ]------------------------------*/
$server_settings['title'] = ""; // Server name or brand to display
$server_settings['ip'] = "gocityrp.fr"; // localhost for local servers / IP or domain name for VDS/VPS
$server_settings['port'] = "30120"; // basically 30120
$server_settings['max_slots'] = 32; // maximum slots. By default 24
/*----------------------------------------------------------------*/
$content = json_decode(file_get_contents("http://" . $server_settings['ip'] . ":" . $server_settings['port'] . "/info.json"), true);
$url = "http://" . $server_settings['ip'] . ":" . $server_settings['port'] . "/info.json";
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);
/* Check for 404 (file not found). */
$info = curl_getinfo($handle);
if ($info['http_code'] != 404 || $info['total_time'] <= 1) {
  $gta5_players = file_get_contents("http://" . $server_settings['ip'] . ":" . $server_settings['port'] . "/players.json");
  $content = json_decode($gta5_players, true);
  $pl_count = count($content);

  $SRV_STATUS = "";
  print "<font class='center'> <i class='fa fa-1x fa-user'></i> En ligne: </font><strong class='center'>$pl_count / $server_settings[max_slots]</strong>";
} else {
  $SRV_STATUS = "<p class='white-text'>Status: <font style='color: #d500f9;'>Hors Ligne</font></p>";
}
print "<span align='center'><strong>$SRV_STATUS</strong></span>";
curl_close($handle);
?>
