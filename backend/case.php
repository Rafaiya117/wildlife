<?php
include 'database/config.php';
include 'database/connection.php';
include 'database/autorun.php';
include 'database/func.php';

class InsertCase{
   public function save($insert){
       global $db;
  $id =  $db->action('INSERT INTO `casedetails` (`caseno`, `types`, `law-section`, `offender`) VALUES (?,?,?,?)', 
   $insert['caseno'],
   $insert['date'],
   $insert['district'],
   $insert['thana'],
   $insert['detection'],
   $insert['action'],
   $insert['types'],
   $insert['law-section'],
   $insert['offender']
    );

   pre($insert);

    echo $id;
   }
}


$case = new InsertCase;
$case->save([
    'caseno' => '3',
    'date'=>'',
    'district'=>'',
    'thana'=>'',
    'detection'=>'',
    'action'=>'',
    'types' => 'what',
    'law-section' => '345/8',
    'offender' => '[1,2]',
    
]);
