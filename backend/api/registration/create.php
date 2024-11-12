<?php
include '../../_a.php';

$_USER = [
    'uid'=> '-99',
    'name'=> ''
];


function create_user($user_info){
    global $db, $_USER;
    $id = $db->action('INSERT into users (`name`,designation, organization, email, phone, `password`, created_by_uid, created_by_name) 
                values (?, ?, ?, ?, ?, md5(?), ?, ?)', 
                $user_info['name'],
                $user_info['designation'],
                $user_info['organization'],
                $user_info['email'],
                $user_info['phone'],
                $user_info['password'],
                
                $_USER['uid'],
                $_USER['name']
                );
    return $id;
}

if(!isset($_POST['id'])){
    $post_json = json_encode($_POST);
    


    // pre($_POST, 'OCL');
    $user_info = [
        'name' =>  $_POST['name'],
        'designation' => $_POST['designation'],
        'organization' => $_POST['organization'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
        'email'=> $_POST['email']
    ];

    $id = create_user($user_info);
     
    header('Location:../../../f2/success.php');




// json_send([
//     'id' => $id,
//     'data_type'=> 'users',
//     'created'=>'created',
//     'fire'=> 'users_saved'
// ]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}