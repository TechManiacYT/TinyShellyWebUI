<?php 

$shelly="http://".$ip;

if ( $devtype=="shellyswitch0" ) { $shelly=$shelly."/relay/0?status"; }
if ( $devtype=="shellyswitch1" ) { $shelly=$shelly."/relay/1?status"; }
if ( $devtype=="shellyrgbw2_color" ) { $shelly=$shelly."/color/0?status"; }
if ( $devtype=="shellyrgbw2_white0" ) { $shelly=$shelly."/white/0?status"; }
if ( $devtype=="shellyrgbw2_white1" ) { $shelly=$shelly."/white/1?status"; }
if ( $devtype=="shellyrgbw2_white2" ) { $shelly=$shelly."/white/2?status"; }
if ( $devtype=="shellyrgbw2_white3" ) { $shelly=$shelly."/white/3?status"; }


$ch = curl_init();
//$shelly='192.168.123.30/relay/0';
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $shelly);
$result = curl_exec($ch);
curl_close($ch);
$obj = json_decode($result);

if ( $obj->ison ) { $shelly_ison="on"; }
if ( ! $obj->ison ) { $shelly_ison="off"; }

if (defined('$obj->brightness')) { $shelly_bright=$obj->brightness; }



?>