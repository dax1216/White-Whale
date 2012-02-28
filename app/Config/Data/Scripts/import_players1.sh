#!/bin/bash
mysqlimport --local \
--fields-terminated-by="," \
--lines-terminated-by="\r\n" \
--fields-optionally-enclosed-by='\q'
--verbose \
 -u root -pgumb00tdb \
whaledev1 ~/players.csv

