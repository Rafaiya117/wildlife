<?php
include '../../_a.php';


if(!empty($_POST)){
    $post_json = json_encode($_POST);

    $id = $_POST['meta']['id'];
    $updated = $db->action('UPDATE all_laws set 
        law_id = ?,  
        law_name = ?, 
        Section = ?,
        Sub_section = ?,
        law_details = ?, 
       
        where id = ? ;', 
        $_POST['data']['law_id'],
        $_POST['data']['law_name'],
        $_POST['data']['Section'],
        $_POST['data']['Sub_section'],
        $_POST['data']['law_details'],
    $id);

json_send([
    'id' => $id,
    'data_type'=> 'all_laws',
    'created'=>'updated_on',
    'fire'=> 'law_save'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}