# TinyShellyWebUI
## Intention:
Creating a small php based UI that consolidates all shelly devices that are currently installed on my builing site... 
The script is installed on a small webserver (raspi or similar).


<div align="center">
    <img src="/Screenshots/mobile.png" width="400px"</img> 
</div>

</br>

<div align="center">
    <img src="/Screenshots/pc.png" width="400px"</img> 
</div>

## How it works:
When calling the index.php, it prints a table in the centered of the screen.
Every time the index.php is called, it will ask all shellys for the status, and display the on/off buttons accordingly.
If you change a button, a form is sent, and the index.php is reloaded.
The table never shows what it thinks the status of a switch is, it asks the shelly devices for the status every time.

## Setup:
* Install apache+php and the php curl modules
* Enter the devices in the index.php like shown in the example below
* DONE
<<<<<<< HEAD

## Edit the index.php file

```
<tr>
<td><a href="http://192.168.200.81">Bad Spiegel</a></td>  <-- Add your shelly IP and some for the device here
<td>
<?php' 
$shelly_ison="off";$checked=""; $devtype="shellyrgbw2_white0"; $ip="192.168.200.81"; $setstate="on";  <--- set the shelly type and IP adress again
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
```

The shelly device types currently supported

* shellyswitch0 Use for Shelly 1 or relay0 of Shelly2
* shellyswitch1 Use for relay1 of Shelly2
* shellyrgbw2_white0 Use for first channel of RGBW2 in white mode
* shellyrgbw2_white1 (2,3) Use for second (etc) channel of RGBW2 in white mode
* shellyrgbw2_color for RGBW2 in color mode


DONE ;-)
=======

## Open ToDo's

* implement shelly2 0/1/2 - style switching
* implement dimmer increase/decrease
