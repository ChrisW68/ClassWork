import os, time
import datetime
from stat import * # ST_SIZE etc

#Looks at 1.txt file and sees if time it was created is older than 24 hours

st=os.stat('C:\\Users\\wise_\\Desktop\\Folder A\\1.txt')
ctime=st.st_ctime
htime=(time.time() - ctime)/3600   #Creates value in hours of age of file
mtime=(time.time() -ctime)/150     #Creates value in minutes of age of file
ltime=24-htime                     #Creates value of time left in hours


#If file is over 24 hours old then it prints the time
if htime>24:
    print (htime)
else:
    print ("Not old enough", mtime, " minutes old")
    print ("Please, wait", ltime, "hours before trying again")
    




    

