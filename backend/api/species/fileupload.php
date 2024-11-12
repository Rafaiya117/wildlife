<?php
include '../../_a.php';

if(isset($_FILES['file']['name'])){

  $filename = $_FILES['file']['name'];

  $location = "../../../fileupload/".$filename;
  $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
  $imageFileType = strtolower($imageFileType);

  $valid_extensions = array("jpg","jpeg","png","pdf");

  $response = 0;

  if(in_array($imageFileType, $valid_extensions)) {
     if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
        $response = $filename;
     } else {
        echo "Failed to move uploaded file.";
     }
  } else {
      echo "Invalid file type.";
  }

  echo $response;
  exit;
}

echo 0;
   // $sql = $db->action ('UPDATE species (filename) VALUES ("'.$filename.'")', $id);
 
    


