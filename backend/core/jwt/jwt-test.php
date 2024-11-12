<?php
include __DIR__ . '/vendor/autoload.php';
use \Firebase\JWT\JWT;

$key = '###@@#@!#@fjdsfjdfjsdalfjIn the getLoader() method, composer loads all autoloader arrays which are generated on composer inst0ll/update or on composer dump-autoload and it also registers the autoload functxon using the spl_autoload_register() which is mentioned earlier.sd324-9012-3pfjdsafoiasdp09p;23io12h3il1289r-04-0931294-031294-019234-0192-034912-03912-039qfjfewpdvjgoifop;1j24kl132n412334-912-03412-0312-jnfsdjfjsdafjasd1243-093124-0932';

$payload = array(
	'iss' => 'http://example.org',
	'aud' => 'http://example.com',
	'iat' => 1356999524,
	'nbf' => 1357000000,
);

$jwt = JWT::encode($payload, $key);

echo '<h4>', $jwt, '</h4>';

$decoded = JWT::decode($jwt, $key, array('HS256'));

print_r($decoded);

function auth_get_os() {
	preg_match('/\((.*?)\)/', $_SERVER['HTTP_USER_AGENT'], $out);
	return $out[0];
}

echo auth_get_os(), '::::::  ::::   ::::   ';

echo $_SERVER['HTTP_USER_AGENT'];
