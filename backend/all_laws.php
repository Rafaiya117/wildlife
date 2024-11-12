<?php

// use InsertCase as GlobalInsertCase;
// use LDAP\Result;

include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';

function law_list(){
    global $db;

   

$result = $db->select('SELECT law_id, law_name, Section, Sub_section, law_details from `all_laws`');

//print_r($result);
// echo("break");

$data = [];

    $last_law_name = '-99999';
    for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){
    
        $word = $result[$i];
    

        $data[$i] = [
            'law_id' => $word['law_id'],
            'law_name' => $word['law_name'],
            'Section' => $word['Section'],
            'Sub_section' => $word['Sub_section'],
            'law_details' => $word['law_details'],
        ];


      
    }
    
    echo '<pre>';
    pre($data);
}
law_list();



