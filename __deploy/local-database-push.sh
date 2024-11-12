#!/bin/bash
GIT=git@bitbucket.org:talgol/wildlife-crime.git
SERVER=wcs.softlh.com

scp remote-db-push.sh $SERVER:/home/nafis/tmp_code/
scp ../backend/db_backup/wildlife.sql.gz $SERVER:/home/nafis/tmp_code/
ssh $SERVER '/home/nafis/tmp_code/remote-db-push.sh'
