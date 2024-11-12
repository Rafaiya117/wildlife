<?php
include '../_a.php';

if(!empty(@$_POST)){
    $USER =  login_with_jwt($_POST['jwt']);
   
}

json_send($USER);

