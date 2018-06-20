from picamera import PiCamera
from time import sleep

import argparse
import cv2
import math
import numpy as np
import os
import sys
import time

# File:             captureImages.py
# Author:           Akaash Venkat

NUM_PHOTOS = 144       
TIME_INTERVAL = 600      



class Camera:
    
    
    def __init__(self):
        
        self.cameraSetup()
    
    
    def cameraSetup(self):
        
        self.camera = PiCamera()
        self.camera.resolution = (600, 400)
        #self.camera.shutter_speed = 6000
        self.camera.hflip = True
        self.camera.vflip = True
        
        self.camera.start_preview()
        sleep(2)
        self.camera.stop_preview()
        sleep(2)


    def captureImage(self, num_images):
    
        for x in range (0, num_images):

            self.pwd_file = "images/"
            self.output_file = ""
            
            if x < 9:
                self.output_file = self.pwd_file + "image_00" + str(x + 1) + ".jpg"
            elif x < 99:
                self.output_file = self.pwd_file + "image_0" + str(x + 1) + ".jpg"
            else:
                self.output_file = self.pwd_file + "image_" + str(x + 1) + ".jpg"
            
            self.camera.capture(self.output_file)
            sleep(TIME_INTERVAL)

        sleep(2)
        cv2.destroyAllWindows()



def main():
    
    my_camera = Camera()
    my_camera.captureImage(NUM_PHOTOS)


if __name__ == '__main__':
    main()
