<?php
include '../../_a.php';

if(!empty($_POST)){
    $post_json = json_encode($_POST);
    
    $id = $_POST['meta']['id'];
    $updated = $db->action('UPDATE wlor_raw set raw_json = ? where id = ? ;', $post_json, $id);





json_send([
    'id' => $id,
    'data_type'=> 'wlor',
    'created'=>'created_on',
    'fire'=> 'wlor_saved'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}