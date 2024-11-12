<?PHP

function err($no, $data = []) {
	$err_list = array(

		401 => 'HTTP/1.1 401 Unauthorized',
		402 => 'HTTP/1.1 402 Payment Required',
		403 => 'HTTP/1.1 403 Forbidden',
		404 => 'HTTP/1.1 404 Not Found',
		412 => 'HTTP/1.1 412 Precondition Failed',
	);

	header($err_list[$no]);
	$erro = $err_list[$no] . PHP_EOL;
	if (!empty($data)) {
		$erro = $data;
	}

	json_send(['data' => [], 'empty' => true, 'error' => $erro, 'error_code' => $no]);
	
	
}

function set_for_cross_origin() {
	$Origin = (empty($_SERVER['HTTP_ORIGIN'])) ? ('*') : ($_SERVER['HTTP_ORIGIN']);

	header('Access-Control-Allow-Origin: ' . $Origin); // *
	header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
}