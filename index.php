<html>
<style>
<?php
include_once('toggle_button_css.css');
?>

body, a { background-color: black; font-family: "Lucida Console"; color: white; font-size: 35px; font-weight: bold; text-decoration: none; text-align: center; }
table, td, tr,th { border: 10px solid black; vertical-align: top; font-size: 25px; font-weight: italic;  margin-left:auto; margin-right:auto;} 
th { background-color:#222; colspan:2 ;} 

</style>
<body>
<?php

function call_url($call_url)  { //print("$url");
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_URL, $call_url);
				$result = curl_exec($ch);
				curl_close($ch);
				//print("$result");
				}

if ( isset($_POST['devtype']) ) { 
$setstate=$_POST['setstate'];
$devtype=$_POST['devtype'];
$ip=$_POST['ip']; 
if ( $devtype=="shellyswitch0" ) { 
			$url="http://".$ip."/relay/0?turn=".$setstate; 
			 call_url($url);
			 }

if ( $devtype=="shellyswitch1" ) { 
			$url="http://".$ip."/relay/1?turn=".$setstate; 
			call_url($url); }

if ( $devtype=="shellyrgbw2_color" ) { 
			$url="http://".$ip."/color/0?turn=".$setstate; 
			call_url($url);
			 }

if ( $devtype=="shellyrgbw2_white0" ) { 
			$url="http://".$ip."/white/0?turn=".$setstate; 
			call_url($url);
			 }

if ( $devtype=="shellyrgbw2_white1" ) { 
			$url="http://".$ip."/white/1?turn=".$setstate; 
			call_url($url);
			 }

if ( $devtype=="shellyrgbw2_white2" ) { 
			$url="http://".$ip."/white/2?turn=".$setstate; 
			call_url($url);
			 }

if ( $devtype=="shellyrgbw2_white3" ) { 
			$url="http://".$ip."/white/3?turn=".$setstate; 
			call_url($url);
			 }

}

?>

<table border=0>
<th colspan=2>Haus</th>



<tr>
<td><a href="http://192.168.200.50">Haupttreppe</a></td>
<td>
<?php 
$checked=""; $devtype="shellyswitch0"; $ip="192.168.200.50"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<tr>
<td><a href="http://192.168.200.51">Hof Strahler</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyswitch0"; $ip="192.168.200.51"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<tr>
<td><a href="http://192.168.200.52">Keller Hinten</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyswitch0"; $ip="192.168.200.52"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>



<th colspan=2>Flur Oben 1</th>

<tr>
<td><a href="http://192.168.200.70">Wandlampe Innen</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyswitch1"; $ip="192.168.200.70"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<th colspan=2>Kiera</th>




<tr>
<td><a href="http://192.168.200.60">Wandlampe 1</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_color"; $ip="192.168.200.60"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<th colspan=2>Dachboden</th>



<tr>
<td><a href="http://192.168.200.80">Arbeitsbereich</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white0"; $ip="192.168.200.80"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<tr>
<td><a href="http://192.168.200.80">T&uuml;r</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white1"; $ip="192.168.200.80"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<tr>
<td><a href="http://192.168.200.80">Aufenthaltsbereich</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white2"; $ip="192.168.200.80"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>





<tr>
<td><a href="http://192.168.200.80">Bad Decke</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white3"; $ip="192.168.200.80"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




<tr>
<td><a href="http://192.168.200.81">Bad Spiegel</a></td>
<td>
<?php 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white0"; $ip="192.168.200.81"; $setstate="on";
include('shelly_status.php');
if ( $shelly_ison=="on" ) { $checked="checked=\"checked\""; $setstate="off";}

print("
<form method=\"POST\" action=\"index.php\" >
<label class=\"switch\">
  <input type=\"checkbox\"  name=\"button\" value=\"1\" $checked onChange=\"this.form.submit()\" > </input>
    <span class=\"slider round\"></span>
  <input type=\"hidden\" name=\"ip\" value=\"$ip\"></input>
  <input type=\"hidden\" name=\"devtype\" value=\"$devtype\"></input>
  <input type=\"hidden\" name=\"setstate\" value=\"$setstate\"></input>
</label>
</form>
");
?>
</td>
</tr>




</table>


</body>
</html>
