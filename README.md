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
