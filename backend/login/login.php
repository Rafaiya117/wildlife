<?PHP
// die("eeeee");
// show all erro 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../_a.php';


// pre($_POST);
if(!empty($_POST)){

    $user_data = check_login_user_password($_POST['username'], $_POST['password']);
    json_send($user_data);
    
}


err(401, 'WRONG ID / Password ... ');

// $user_data = check_login_user_password('d2@softlh.com', 'dassa_mn');


// pre($_SESSION);
// pre($_USER);
// pre($_SESSION);
// 
