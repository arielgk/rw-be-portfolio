#!/bin/sh

(
set -e
. ./list.txt
)

if [ "$?" -ne 0 ]; then
  echo "The world is on fire!" | mail -s 'Doom is upon us' you@youremail.com
fi
