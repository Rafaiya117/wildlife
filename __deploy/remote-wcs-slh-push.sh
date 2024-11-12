#!/bin/bash
GIT='git@bitbucket.org:talgol/wildlife-crime.git'
location=/www/wcs.softlh.com/wcab

mkdir /tmp/repo_copy/
cd /tmp/repo_copy/
git clone $GIT


rm $location -rf 
mkdir $location



## only copy backend, dist, f2, fileupload
cp -r wildlife-crime/backend $location 
cp -r wildlife-crime/dist $location
cp -r wildlife-crime/f2 $location
cp -r wildlife-crime/fileupload $location

cd ~
rm /tmp/repo_copy/ -rf

#echo $GIT
