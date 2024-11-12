<?php
include '../../_a.php';

$_USER = [
    'uid'=> '-99',
    'name'=> 'auto admin'
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

if(!empty($_POST)){
    $post_json = json_encode($_POST);
    
    // pre($_POST['data']);
    $user_info = [
        'name' =>  $_POST['data']['name'],
        'designation' => $_POST['data']['designation'],
        'organization' => $_POST['data']['organization'],
        'phone' => $_POST['data']['phone'],
        'password' => $_POST['data']['password'],
        'email'=> $_POST['data']['email']
    ];

    $id = create_user($user_info);
     





json_send([
    'id' => $id,
    'data_type'=> 'users',
    'created'=>'created',
    'fire'=> 'users_saved'
]);
}else{
    json_send([
        'eror_code' => 001,
        'eror_details'=> 'post not found'
    ]); 
}