<?php
include '../../_a.php';


if(!empty($_POST['id'])){
    $post_json = json_encode($_POST);
    
    $id = $_POST['id'];
    $updated = $db->action('UPDATE users SET `status` = "Activate" where id = "'.$id.'"');
json_send([
    'id' => $updated,
    'data_type'=> 'users',
    'created'=>'updated_on',
    'fire'=> 'users_saved_bkend'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}