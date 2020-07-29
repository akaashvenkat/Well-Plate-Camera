# Well Plate Camera

- - - - - - -
Research project for Zheng Lab (at Stein Eye Institute, UCLA) that allows researchers to monitor the change in cells. The project is run on a Raspberry Pi, where a Python file is called to take images at intervals of a 96-well plate using the Raspberry Pi camera. The Pi runs a PHP web dashboard that allows users to view images at different intervals side by side, to notice the difference in the cells on the 96-well plate. Users can connect to the Pi by connecting to the lab's router.

- - - - - - -
## captureImages.py

Captures images at a user-specified time interval for a user-specified duration, and saves images into a local directory. Run on a Raspberry Pi.

- - - - - - -
## zipImages.py

Zips the latest batch of photos. Run on a Raspberry Pi.

- - - - - - - - -
## *.php

Files for web interface run on a Raspberry Pi. Users can access the interface by connecting their laptop on the same wireless network as Raspberry Pi. Web interface allows users to view images taken, compare two images side by side, and get timestamp of each image. Web interface also contains a page that contains setup videos.

- - - - - - - - -
## css/stylez.css

Contains CSS descriptions for web interface run on a Raspberry Pi.

- - - - - - - - -
