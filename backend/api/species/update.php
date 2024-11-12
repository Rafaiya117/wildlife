<?php
include '../../_a.php';


if(!empty($_POST)){
    $post_json = json_encode($_POST);

    $id = $_POST['meta']['id'];
    $updated = $db->action('UPDATE species set 
        bangla_name = ?,  
        english_name = ?, 
        scientific_name = ?,
        alt_scientific_name = ?,
        scientific_ref = ?, 
        schedule = ?,
        g_name = ?,
        Sub_group = ?,
        Sub_group_bn = ?,
        subspecies = ?,
        IUCN = ?,
        CITES = ?,
        `type` = ?,
        trade_for = ?,
        `image` = ? 
        
        where id = ? ;', 
        $_POST['data']['bangla_name'],
        $_POST['data']['english_name'],
        $_POST['data']['scientific_name'],
        $_POST['data']['alt_scientific_name'],
        $_POST['data']['scientific_ref'],
        $_POST['data']['schedule'],

        $_POST['data']['g_name'],
        
        $_POST['data']['Sub_group'],
        $_POST['data']['Sub_group_bn'],
        $_POST['data']['subspecies'],
        $_POST['data']['IUCN'],
        $_POST['data']['CITES'],
        $_POST['data']['type'],
        $_POST['data']['trade_for'],
        $_POST['data']['image'],
    $id);

json_send([
    'id' => $id,
    'data_type'=> 'species',
    'created'=>'updated_on',
    'fire'=> 'species_saved'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}