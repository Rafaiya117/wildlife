<?php
include '../../_a.php';

if(isset($_POST['id'])){

   
    $updated = $db->action('UPDATE wlor_raw set published="draft"  where id = ? AND published="published" ;',$_POST['id']);

    json_send([
        'id' => $updated,
        'data_type'=> 'wlor',
        'created'=>'created_on',
        'fire'=> 'wlor_saved_updated'
    ]);

}else{
    
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 

}
