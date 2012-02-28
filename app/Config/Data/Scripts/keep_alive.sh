#!/bin/bash
# Script:  keep_alive.sh
# Description:  The ssh terminal session at least with cygwin gets
#               timeout or something.  So, this script will run
#               in a loop outputting data to the terminal screen
while ( 1 -ne 2 ); do
{
  echo $(date)
  sleep 10
}
