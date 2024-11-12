<?php



include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';


function species_list($Sub_group){
    global $db;
    $result = $db->select('SELECT id,bangla_name,english_name, scientific_name,scientific_Ref,g_name,Sub_group,Sub_group_bn,subspecies,IUCN,CITES,type from `mytable`');
    
    if(sizeof($result)> 0){
        return $result[0]['text'];
      }
        return 'Result not found of key: '. $Sub_group  ;
 

}
