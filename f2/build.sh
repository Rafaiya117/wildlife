#!/bin/bash
rm ../f2/* -rf

cp -r js ../f2/
cp -r vendor ../f2/
cp -r dist ../f2/
cp -r css ../f2/


cp -r bin_file ../f2/
cp -r php_includes ../f2/
cp registration.php ../f2/
cp change_password.php ../f2/
cp success.php ../f2/
# cp login.php ../f2/

php login.php > ../f2/login.php
php index.php > ../f2/index.html
