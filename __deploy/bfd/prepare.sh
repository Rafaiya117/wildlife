#!/bin/bash
####################################################
upload_location=wcs.softlh.com:/home/nafis/wcs-ziplocation/

####################################################
git_url=git@bitbucket.org:talgol/wildlife-crime.git
####################################################
temp_folder=/tmp/wcs_deploy_2023
wcs_zip=$temp_folder/wcs.zip
####################################################

function create_folder(){
    if [ -d "$1" ]; then  
        echo "remove folder ($1) it??" 
        rm -rf $1
    fi
    mkdir $1
}

function git_clone(){
    git clone $git_url $temp_folder
}


function git_pull_or_clone(){
    
    if [ ! -d "$temp_folder" ]; then  
        create_folder $temp_folder
        git_clone
    else
        cd $temp_folder
        git pull
    fi 
}



function prep_and_zip(){
    zipfolder=$temp_folder/zipfolder 
    create_folder $zipfolder

    cp -r $temp_folder/fileupload $zipfolder
    cp -r $temp_folder/backend $zipfolder
    cp -r $temp_folder/dist $zipfolder
    cp -r $temp_folder/f2 $zipfolder
    cp -r $temp_folder/index.html $zipfolder
    cd $zipfolder 
    7z a -tzip $wcs_zip .  
}


function upload(){
    scp $wcs_zip $upload_location
    scp $temp_folder/__deploy/bfd/remote_bfd.sh $upload_location
}



git_pull_or_clone
prep_and_zip
upload