<?php
include '../../_a.php';


if(!empty($_POST)){
    $post_json = json_encode($_POST);
    
    $id = $_POST['meta']['id'];
    $updated = $db->action('UPDATE users set 
        `name` = ?,  
        organization = ?, 
        
        designation = ?,
        phone = ?,
        email = ?,
        `status` =?,
        account_active = ?
        
        
        
        where id = ? ;', 
        $_POST['data']['name'],
        $_POST['data']['organization'],
        
        $_POST['data']['designation'],
        $_POST['data']['phone'],
        $_POST['data']['email'],
        $_POST['data']['status'],
        $_POST['data']['account_active'],
    $id);

    // if($_POST['status'] ){
    //    $updated = $db->action('UPDATE users SET  `status`="'.$_POST['status'].'" AND where  id = ? ',$id);    
    // }elseif($_POST['account_active'] == '') {
    //     $updated = $db->action('UPDATE users SET `account_active` = `1`  where id = ? ',$id);
    // }

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