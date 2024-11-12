<?php

// use InsertCase as GlobalInsertCase;
// use LDAP\Result;

include __DIR__.'/database/config.php';
include __DIR__.'/database/connection.php';
include __DIR__.'/database/func.php';
include __DIR__.'/database/autorun.php';



function from_db_trans($text_id, $lang = 'en'){
  global $db;
  if($lang === 'bn'){
    $sql = 'SELECT bangla as `text` FROM `trans` where text_id = ? limit 1';
  } else{
    $sql = 'SELECT english as `text` FROM `trans` where text_id = ? limit 1';
    
  }
  $result = $db->select($sql, $text_id);
  // pre($result);
  // echo $sql, ' ', $lang;
  if(sizeof($result)> 0){
    return $result[0]['text'];
  }
    return 'Language not found of key: '. $text_id . ' ~ lang: ' .$lang ;
}
