#!/bin/bash

### Set initial time of file
LTIME=`stat -c %Z ../public/js/frontend-app.js`

while true
do
   ATIME=`stat -c %Z ../public/js/frontend-app.js`

   if [[ "$ATIME" != "$LTIME" ]]
   then
        echo "RUN COMMAND"
#       cat /home/ariel/Dev/RW/rw-socialyz-be/public/js/frontend-app.js
        cp -rf  /home/ariel/Dev/RW/rw-socialyz-be/public/js/frontend-app.js /mnt/c80d94bd-c667-4d6f-8c0f-6d3465213b57/Dev/RW/socialyz-unity/Assets/StreamingAssets/local_www/js/frontend-app.js

        echo "DONE" + $ATIME
       LTIME=$ATIME
   fi
   sleep 5
done
