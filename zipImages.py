from datetime import datetime
from pytz import timezone
import os

# File:             zipImages.py
# Author:           Akaash Venkat

def main():
    
    pst_time = datetime.now(timezone('UTC')).astimezone(timezone('US/Pacific'))
    zip_file = "images_" + pst_time.strftime("%m-%d-%Y") + ".zip"
    command = "zip -r " + zip_file + " images/"
    os.system(command)
    os.system("rm images/*")


if __name__ == '__main__':
    main()
