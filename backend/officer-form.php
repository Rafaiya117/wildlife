<?php
include 'database/config.php';
include 'database/connection.php';
include 'database/autorun.php';
include 'database/func.php';

class officer{
   public function post($add){
   global $db;
   if(isset($_POST['submit'])){
      
      $sql =  $db->action("INSERT INTO `officer_information` ('name', 'designation', 'posting') VALUES (?,?,?)",
      $add = $_POST['name'],
      $add = $_POST['designation'],
      $add = $_POST['posting']
    );
   }
   pre($add);
   print_r  ($_POST);
   }
}
$off = new officer;
$off->post([
    'name' => $_POST['name'],
    'designation' => $_POST['designation'],
    'posting' => $_POST['posting']
   ]);
