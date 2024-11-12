<?php

// use InsertCase as GlobalInsertCase;
// use LDAP\Result;

include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';

function schedule_5_list(){
    global $db;

   

$result = $db->select('SELECT * from `species_exotics`');

//print_r($result);
// echo("break");

$data = [];

   
    for($i=0,$ilen=sizeof($result); $i<$ilen;$i+=1){
    
        $word = $result[$i];
    

        $data[$i] = [
            'id' => $word['id'],
            'Bangla_name' => $word['bangla_name'],
            'English_name' => $word['english_name'],
            'Scientific_name' => $word['scientific_name'],
            'Schedule' => $word['schedule'],
            'Group' => $word['g_name'],
            'Sub Group' => $word['Sub_group'],
            'Sub Group BN' => $word['Sub_group_bn'],
            'Subspecies' => $word['subspecies'],
            'IUCN' => $word['IUCN'],
            'CITES' => $word['CITES'],
            'type' => $word['type'],
        ];


      
    }
    
    echo '<pre>';
    pre($data);
}
schedule_5_list();



