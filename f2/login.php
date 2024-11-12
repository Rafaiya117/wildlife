<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="gN8rDGhlJjY07wVRBAU563JGQFo9ITATiYNQUU4u">

    <title>Wildlife Offence Reporting Tool - WORT | Login</title>
    <!-- Styles -->
    <link href="../dist/css/style.css" rel="stylesheet">
    <link href="../dist/css/login.css" rel="stylesheet">
    <link type="image/xicon" rel="icon" href="dist/images/favicon.ico">
</head>

<body class="login-bac">
    <div class="container-fluid">
        <div class="logofix">
            <a href="#"> <img src="../dist/img/final_logo_white.png" style="width:10%"></a>
        </div>
        <div class="login-form">
            <div class="card"></div>
            <div class="card-body">
                <div class="form-group col-md-12 ">
                    <h1 class="login-text">Login Here<h1>
                            <input type="text" class="form-control" placeholder="Email" id="username" required />

                            <i class="fas fa-user"></i>
                </div>

                <div class="form-group log-status">
                    <input type="password" class="form-control" placeholder="Password" id="password">
                    <i class="fa fa-lock"></i>
                </div>
                <span class="alert">Invalid Credentials</span>
                <div>
                    <a class="link" href="./change_password.php">Lost your password?</a>
                </div>
                <div><a href="./registration.php">Registration</a></div>
                <button type="button" class="log-btn">Log in</button>
            </div><br>
            <div></div>
        </div>

    </div>
    <?php 
include 'php_includes/autoload.php';
js_loader([
    'js/vendor/jquery.min.js',
    'js/vendor/underscore-umd-min.js',
    'js/libs/login.js',
    'js/libs/notification.js',
]);
?>
    <!-- Scripts -->

    </div>
</body>

</html>