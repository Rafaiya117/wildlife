<?php
include '../../_a.php';





if(!empty($_POST)){
    $post_json = json_encode($_POST);
    $id= $db->action('INSERT into wlor_raw (raw_json, created_by_uid) values (?, ?)', $post_json, $_SESSION['id']);





json_send([
    'id' => $id,
    'data_type'=> 'wlor',
    'created'=>'created_on',
    'fire'=> 'wlor_created_id'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}