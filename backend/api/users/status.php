<?php
include '../../_a.php';

if(!empty($_POST)){
    $post_json = json_encode($_POST);
    $id = $_POST['id'];
    $data = $db->select('SELECT id, `name`, email, `status`, phone, organization, designation, `role`, account_active from users where id = ?;',$id);
    if($data){
       $stat = $data[0]['status'];
       if ($stat === "Activate") {
           $updated = $db->action('UPDATE users SET `status` = "Deactivated"  where id = "'.$id.'"');
        } 
       else if($stat ==="Deactivated"){
           $newStatus = $db->action('UPDATE users SET `status` = "Activate" where id = "'.$id.'"');
       }
    } 
}
    
  

// }
// else{
//     json_send([
//         'eror_code' => 001,
//         'eror_details'=> 'post not found'
//     ]); 
// }
