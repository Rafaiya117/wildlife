#!/bin/bash

project_name='wort'
verison=1.1
dist_folder=/opt/lampp/htdocs/wort

###################################

temp_folder="/tmp/$project_name-$version/"


back_up_zip="/tmp/$project_name-$version-backup_`date +%Y-%m-%d`.zip"

function backup_and_clean_folder(){
    
    if [ -d "$1" ]; then  
        cd $1
        zip -r $back_up_zip .
        cd $temp_folder
        rm $1/* -rf
    else
        echo "Error: folder ($1) not exist"
        exit 1
    fi

}


function create_folder(){
    if [ -d "$1" ]; then  
        echo "remove folder ($1) it??" 
        rm -rf $1
    fi
    mkdir $1
}


##################################################################
###                    RUN THIS                               ####
##################################################################

create_folder $temp_folder
unzip wcs.zip -d $temp_folder
backup_and_clean_folder $dist_folder 
cp -r $temp_folder/* $dist_folder/