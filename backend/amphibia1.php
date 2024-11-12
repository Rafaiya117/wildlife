<?php

// use InsertCase as GlobalInsertCase;
// use LDAP\Result;

include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';

function sub_group_list(){
    global $db;
$result = $db->select('SELECT bangla_name,english_name,g_name,scientific_name,scientific_Ref FROM `mytable` where `Sub_group` = "Frog"');
   
$data = [];

for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){

$word = $result[$i];
$data[$i] = [
    'id' => $word['id'],
    
 
    'Group name' => $word['g_name'],
    'bangla_name'=> $word['bangla_name'],
    'english_name'=> $word['english_name'],
    'scientific_name'=> $word['scientific_name'],
    'scientific_Ref'=> $word['scientific_Ref'],
   
];

      
    }
    
    echo '<pre>';
    pre($data);
}
sub_group_list();

//2nd
echo "2nd";
function sub1_group_list(){
    global $db;
$result = $db->select('SELECT id,bangla_name,english_name,g_name,scientific_name,scientific_Ref FROM `mytable` where `Sub_group` = "Toad"');
   
$data = [];

for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){

$word = $result[$i];
$data[$i] = [
    'id' => $word['id'],
    
 
    'Group name' => $word['g_name'],
    'bangla_name'=> $word['bangla_name'],
    'english_name'=> $word['english_name'],
    'scientific_name'=> $word['scientific_name'],
    'scientific_Ref'=> $word['scientific_Ref'],
   
];

      
    }
    
    echo '<pre>';
    pre($data);
}
sub1_group_list();


