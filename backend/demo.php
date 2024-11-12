<?php
include 'database/config.php';
include 'database/connection.php';
include 'database/autorun.php';


$name= $db->select('SELECT * FROM `mytable` limit 25;');
// print_r(json_encode($name));


print_r($name[0]['English_Name']);


 