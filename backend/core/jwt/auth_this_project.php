<?php

function forget_password_change_password($in) {

	if (strlen($in['uuid']) !== 32) {
		return false;
	}

	$check = db_get('SELECT id from forgot_password where active = 1 and id = ? and uuid = ? and  ip_address = ?  and uid = ?',
		$in['rx_id'],
		$in['uuid'],
		auth_get_ip(),
		$in['uid']
	);
	if (empty($check)) {
		return false;
	}

	db_action('UPDATE forgot_password set active = 2 where id = ?', $check[0]['id']);

	db_action('UPDATE users set password = md5(?) where id = ?', $in['password'], $in['uid']);

}

function forgot_password($employee_id_or_email) {
	$check = db_get('SELECT  `id` FROM users  WHERE (`employee_id` = ? or email = ? ) AND account_active = 1
 LIMIT 1 ', $employee_id_or_email, $employee_id_or_email);

	$user_id = $check[0]['id'];

	if (empty($check)) {
		err(401, 'Account is not registeded! Please Register your account.');
	}

	// $user_id = $check[0]['id'];
	$user_data = db_get('SELECT  `id`, `name`, `email` FROM users  WHERE id = ? AND account_active = 1 LIMIT 1 ', $user_id);

	$user = $user_data[0];
	db_action('UPDATE forgot_password set active = 0 where uid = ? and active = 1', $user['id']);
	$uuid = auth_gen_uuid();
	$row_id = db_action('INSERT into forgot_password (uid, uuid, created_by_uid, created_by_name, ip_address ) values (?, ?, ?, ?, ?)', $user_id, $uuid, $user_id, 'X-' . $user['name'], auth_get_ip());

	$link_url = API_BASEURL . 'forget_password/email2forgot_password.php?uuid=' . $uuid . '&uid=' . $user_id . '&rx_id=' . $row_id . '&email=' . $user['email'];

	// $email_account = $check[0]['email'];
	send_email([
		'email' => $user['email'],
		'user_name' => $user['name'],
		'subject' => 'Password Reset',
		'title' => 'Password Reset',
		'body' => 'Reset your password using the button bellow ',
		'call_to_action_text' => 'Reset Password',
		'call_to_action_link' => $link_url,
	]);
}


function check_login_user_password($email, $password){
    global $db;
    
    $check = $db->select('SELECT id from users where email = ? and password = md5(?) and account_active = 1 limit 1;', 
        $email, $password);



	if (empty($check)) {
		err(401, 'Wrong Employee Id or Password . 0 0');
	}	
	$user_id =  $check[0]['id'];
	$user_data_with_jwt  = auth_login_with_password($user_id);
        
    return $user_data_with_jwt ;
    
}

function login_with_employee_id($employee_id_or_email, $password) {
	$check = db_get('SELECT  `id` FROM users  WHERE  `password` = md5(?)  AND  (`employee_id` = ? or email = ? ) AND account_active = 1 LIMIT 1 ', $password, $employee_id_or_email, $employee_id_or_email);

	if (empty($check)) {
		err(401, 'Wrong Employee Id or Password .');
	}
	$user_id = $check[0]['id'];

	// echo 'user_id : ', $user_id;
	$user_data_with_jwt = auth_login_with_password($user_id);
	// echo ' jwt: ';
	// pre($user_data_with_jwt);
	return $user_data_with_jwt;

}

// pre(login_with_employee_id('041081040', 'lolita56'));

function login_with_jwt($jwt) {
	$jwt_data = auth_check_jwt($jwt);
	return auth_login_with_jwt($jwt_data);

}

function jwt_check($jwt) {
	$user_data = (array) auth_check_jwt($jwt);
	$user_data['id'] = $user_data['user_id'];
	auth_login_session_set($user_data);
}
// $test_jwt = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3QiLCJhdWQiOiJodHRwOlwvXC9sb2NhbGhvc3QiLCJpYXQiOjE2MTAwMDY4NTAsIm5iZiI6MTYxMDAwNjg0MCwibmFtZSI6Ik5hZmlzIEFobWFkIiwicm9sZSI6bnVsbCwicnhfaWQiOiIyOCIsInVzZXJfaWQiOjEsInV1aWQiOiI3MTdkMDkxN2FlZjgwNTkyODI2MjcxYzcyMWJhYTBhMSJ9.C-wFGIH8ThfxbosCs1OklTELy7z_W5ov5sA0-vhfU8I';
// $ud = login_with_jwt($test_jwt);
// auth_logout();

function must_login($role_action) {
	global $_USER;

	if (empty($_SESSION['sub'])) {
		err(401, 'Login using User / Pass ');
	}

	$_USER = [
		'name' 	=> 	$_SESSION['name'],
		'role' 	=> 	$_SESSION['role'],
		'rx_id' => 	$_SESSION['rx_id'],
		'id' 	=> 	$_SESSION['id'],
		'uuid' 	=> 	$_SESSION['uuid'],
	];

	// pre([$role_action], 'x PONIT XXXXXXXD');
	return true;

}
