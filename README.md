# Rasberry-pi-home-lights

This project was my first step using a rasberry pi for any kind of home automation. I needed lights in my apartment, so I had the option of either buying lights and using the switch on the wall like a normal person, or trying something fun (and frustrating at times) and learning something new. The website is hosted on the pi using apache. There are a lot of commands and updates you will need to install before the pi will be set up, and that is the same as most projects with the pi. The code is written in python and php. One thing that is very important to remember is to not mess with the main electricity wherever this is being set up. Use an external power source of some kind, even if its connected to the wall. Using mains can end in injury or an expensive visit from a landlord or electrician.

Here are the parts that I used in the project:

 12V LEDs
 Relay
 GPIO wires
 male/female connectors
 WiFi dongle ( if no onboard wifi)
 wire for the 12V
 wire strippers
 Raspberry Pi 2
 
 Here are the setup commands for apache
 
 sudo apt-get update && sudo apt-get upgrade

sudo apt-get install python-dev
sudo apt-get install python-rpi.gpio

sudo apt-get install apache2 php5 libapache2-mod-php5

sudo service apache2 restart

sudo nano /etc/sudoers
 add to bottom of file:  www-data ALL=(root) NOPASSWD:ALL
