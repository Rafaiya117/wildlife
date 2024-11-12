#!/bin/bash
GIT=git@bitbucket.org:talgol/wildlife-crime.git
SERVER=wcs.softlh.com

cd ../f3/
./build.sh
cd ../__deploy/
# git add . 
# git commit -m "Build push"
# git push

# cd __deploy/





# 7z a -tzip wlor_lock -r ../f3.zip ../f3



# scp remote-wcs-slh-push.sh $SERVER:/home/nafis/tmp_code/
# ssh $SERVER 'chmod +x /home/nafis/tmp_code/remote-wcs-slh-push.sh'
# ssh $SERVER '/home/nafis/tmp_code/remote-wcs-slh-push.sh'



7z a -tzip wort.zip -r ../f2 ../backend ../dist 