<?php
include 'vendor/autoload.php';
include 'auth_this_project.php';

use \Firebase\JWT\JWT;

define('JWT_KEY', '###@@#@!#@EEEQSdfjsdalfjIn the getLoader() method, composer loads all autoloader arrays which are generated on composer inst0ll/update or on composer dump-autoload and it also registers the autoload functxon using the spl_autoload_register() which is mentioned earlier.sd324-9012-3pfjdsafoiasdp09p;23io12h3il1289r-04-0931294-031294-019234-0192-034912-03912-039qfjfewpdvjgoifop;1j24kl132n412334-912-03412-0312-jnfsdjfjsdafjasd1243-093124-0932');

function auth_get_os() {

	preg_match('/\((.*?)\)/', @$_SERVER['HTTP_USER_AGENT'], $out);
	if(!empty($out)){
		return $out[0];
	}
	return 'CLI-Call';
}


function  auth_get_device_info(){
	if(!empty(@$_SERVER['HTTP_USER_AGENT'])){
		return $_SERVER['HTTP_USER_AGENT'];
	}
	return 'CLI-HACKs';
}
function auth_decode($jwt) {
	try {
		return JWT::decode($jwt, JWT_KEY, array('HS256'));
	} catch (Exception $e) {
		err(401, 'Wrong JWT Please Login / again ! TCX:401');
	}
}

function auth_gen_uuid() {
	$bytes = random_bytes(16);
	return bin2hex($bytes);

}
function auth_get_ip() {
	return getenv('HTTP_CLIENT_IP') ?:
	getenv('HTTP_X_FORWARDED_FOR') ?:
	getenv('HTTP_X_FORWARDED') ?:
	getenv('HTTP_FORWARDED_FOR') ?:
	getenv('HTTP_FORWARDED') ?:
	getenv('REMOTE_ADDR');
}

function auth_encode($user_data) {
	$auth_url = @$_SERVER['REQUEST_SCHEME'] . '://' . @$_SERVER['HTTP_HOST'];
	$payload = array(
		'iss' => $auth_url,
		'aud' => $auth_url,
		'iat' => time(),
		'nbf' => time() - 10,

		'name' => $user_data['name'],
		'role' => $user_data['role'],
		'rx_id' => $user_data['rx_id'],
		'user_id' => $user_data['id'],
		'uuid' => $user_data['uuid'],

	);
	$jwt = JWT::encode($payload, JWT_KEY);
	return $jwt;
}

function auth_logout() {
	if (!empty(@$_SESSION['sub'])) {
		global $db;
		$db->action('UPDATE login_meta
		set
			stay_logged_in = 0,
			updated_on = now()
			where id = ? ',
			$_SESSION['rx_id']);
		session_destroy();
	}
}

function auth_login_session_set($user_data) {
	// pre($user_data);
	$_SESSION['sub'] = 'Logginged!!==block---in---there!!';
	$_SESSION['name'] = $user_data['name'];
	$_SESSION['role'] = $user_data['role'];
	$_SESSION['rx_id'] = $user_data['rx_id'];
	$_SESSION['id'] = $user_data['id'];
	$_SESSION['uuid'] = $user_data['uuid'];

	// pre($_SESSION, 'XXX this is called!!!');
}

function auth_login_with_password($uid) {
	global $db;
	$data = $db->select('SELECT `id`,`name`,`role` FROM users  WHERE `id` = ?
 LIMIT 1 ', $uid);

	
	$user_data = $data[0];
	$user_data['uuid'] = auth_gen_uuid();
	
	
	

	$user_data['rx_id'] = $db->action('INSERT INTO login_meta
		(
		`os`,
		`device_info`,
		 `ban`,
		 `user_id`,
		 `device_id`,
		`created_on`,
		 `created_by_uid`,
		 `created_by_name`
		) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?)',
		auth_get_os(),
		auth_get_device_info(),
		0,
		$user_data['id'],
		$user_data['uuid'], $user_data['id'], $user_data['name']
	);

	$user_data['jwt'] = auth_encode($user_data);
	auth_login_session_set($user_data);
	return $user_data;

}

function auth_check_jwt($jwt) {
	if (strlen($jwt) < 310) {
		
		err(401, 'Wrong JWT Please Login / again !-! ');
	}
	$jwt_data = auth_decode($jwt);
	$auth_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'];

	if ($auth_url !== $jwt_data->aud or $auth_url !== $jwt_data->iss) {
		err(401, 'JWT error iss / aud miss matach ! Login again');
	}

	if (empty($jwt_data->rx_id)) {
		err(401, 'Wrong rx_id OLD JWT Login / again ');
	}

	global $db;
	$db_check = $db->select('SELECT `id` from login_meta
		WHERE `id` = ?
			and `user_id` = ?
			and device_id = ?
			and device_info = ?
			and stay_logged_in = 1
			AND ban = 0
			LIMIT 1 ',
		$jwt_data->rx_id,
		$jwt_data->user_id,
		$jwt_data->uuid,
		@$_SERVER['HTTP_USER_AGENT']
	);

	//
	if (empty($db_check)) {
		err(401, 'JWT error Login again ! ');
	}

	return $jwt_data;

	// pre($db_check);
}

function auth_login_with_jwt($jwt_data) {
	global $db;
	$db->action('UPDATE login_meta
		set
			last_login_time = now(),
			updated_on = now()
			where id = ? ',
		$jwt_data->rx_id);

	// pre($jwt_data);
	$user_data = [
		'name' => $jwt_data->name,
		'role' => $jwt_data->role,
		'rx_id' => $jwt_data->rx_id,
		'id' => $jwt_data->user_id,
		'uuid' => $jwt_data->uuid,
	];

	$user_data['jwt'] = auth_encode($user_data);
	auth_login_session_set($user_data);
	return $user_data;
}