<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="awnCd9ptXy9bOdYYKLHcMpyjCrBRLgLDgEZVV0NW">
  <title>Wild Crime Assist | Register</title>
  <!-- Styles -->
  <link href="../dist/css/style.css" rel="stylesheet">
  <link href="../dist/css/font-awesome.min.css" rel="stylesheet">
  <link href="../dist/css/registration.css" rel="stylesheet">


</head>

<body class="register-bac">
  <div class="logofix">
  <a href=""> <img src="dist/img/AdminLTELogo.png" style="width:10%"></a>
  </div>
 <form id="reg_form" method="POST" action="../backend/api/registration/create.php">
 <div class="card">
    <div class="card-body">
      <h3 class="registration">Registration</h3>
      <div class="form-group col-md-12">
        <h5 class="f-color">Full Name<span style="height:45px;color:#FF0000 !important">*</span></h5>
        <input style="font-size:15px;font-weight: bold;" class="form-control inner-textfield" placeholder="" name="name" id="name" required />
      </div>
      <div class="form-group col-md-12">
          <h5 class="f-color">Agency<span style="height:43px;color:#FF0000 !important">*</span></h5>
          <select name="organization" required="required" style="height:45px; width:101%;font-size:15px;font-weight: bold;color:#009472 !important" class="form-control"   required id="organization">
          </select>
        </div>
        <div class="col-md-12">

          <h5 class="f-color">Division <span style="height:43px;color:#FF0000 !important">*</span></h5>
          <select name="division_id" required="required" style="height:45px;width:101%;color:#009472 !important" class="form-control" id="division_id" required>
            <option style="font-size:15px;font-weight: bold;" value=""></option>
            <option style="font-size:15px;font-weight: bold;" value="Dhaka">Dhaka</option>
            <option style="font-size:15px;font-weight: bold;" value="Khulna">Khulna</option>
            <option style="font-size:15px;font-weight: bold;" value="Barishal">Barishal</option>
            <option style="font-size:15px;font-weight: bold;" value="Chittagong">Chittagong</option>
            <option style="font-size:15px;font-weight: bold;" value="Sylhet">Sylhet</option>
            <option style="font-size:15px;font-weight: bold;" value="Rajshahi">Rajshahi</option>
            <option style="font-size:15px;font-weight: bold;" value="Rangpur">Rangpur</option>
            <option style="font-size:15px;font-weight: bold;" value="Mymensingh">Mymensingh</option>
          </select>
        <!-- </div>
      </div> -->
    </div>
    <div class="form-group col-md-12">
      <h5 class="f-color">Designation <span style="height:43px;color:#FF0000 !important">*</span></h5>
      <select style="font-size:15px;font-weight: bold;height:45px;width:101%;color:#009472 !important" class="form-control" name="designation" id="designation" required></select>
    </div>
    <div class="form-group col-md-12">
      <h5 class="f-color">Email <span style="height:45px;color:#FF0000 !important">*</span></h5>
      <input style="font-size:15px;font-weight: bold;" class="form-control inner-textfield" placeholder="" name="email" id="email" required/>
    </div>
    <div class="form-group col-md-12">
      <h5 class="f-color">Phone Number <span style="height:45px;color:#FF0000 !important">*</span></h5>
      <input style="font-size:15px;font-weight: bold;" class="form-control inner-textfield" placeholder="" name="phone" id="phone" required />
    </div>
    <div class="form-group col-md-12 ">
      <h5 class="f-color">Password <span style="height:45px;color:#FF0000 !important">*</span></h5>
      <input style="font-size:15px;font-weight: bold;" type="password" class="form-control inner-textfield" placeholder="" name="password" id="password" required />
    </div>
    <br>
    <div><input id="id" class="reg-btn" type="submit" value="Registration"></div><br>
    <div class="link">Already have an account ? <a style="color:#f9ddb1;" href="./login.php"><b>Login</b></a></div>
  </div>

  </div>
 </form>


  <?php 
include 'php_includes/autoload.php';
js_loader([
    'js/vendor/jquery.min.js',
    'js/vendor/underscore-umd-min.js',
    'js/libs/registration.js',
   // 'js/libs/check.js',
    // 'js/libs/notification.js',
]);
?>


  <!-- Scripts -->
 
</body>

</html>