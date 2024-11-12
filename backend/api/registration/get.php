<?php
include '../../_a.php';

function reg_data(){
    global $db;

$data = $db->select('SELECT id, `name`, designation, phone, organization from users where `status`= "new" ;',);

//$print = [];
echo'<h2 style="margin-left:10px;"><b>New registered user</b></h2>';
echo '<table border="1">
<tr>
<th>Sl. no.<br>ক্রমিক নং</th>
<th>Name <br>নাম</th>
<th>Designation <br> উপাধি</th>
<th>Phone number <br> ফোন নম্বর</th>
<th>Organization <br> প্রতিষ্ঠান</th>
<th>Actions <br> অ্যাকশন</th>
</tr>';

for($i=0,$ilen = sizeof($data); $i<$ilen; $i++){

    // $word = $data[$i];

    // $print[$i] = [
             
    //     'name' => $word['name'],
    //     'designation'=> $word['designation'],

    // ];
    
    echo '<tr>';
    //   for($j=0, $ilen=sizeof($print);$j<$ilen;$j++ ){

        echo' <td>'.$data[$i]['id'].'</td>';
        echo' <td>'.$data[$i]['name'].'</td>';
        echo' <td>'.$data[$i]['designation'].'</td>';
        echo' <td>'.$data[$i]['phone'].'</td>';
        echo' <td>'.$data[$i]['organization'].'</td>';
        echo' <td><a class="btn btn-success btn-approved" style="font: size 30px;" data-id="',$data[$i]['id'],'" >Approve User</a></td>';

    }
    echo' </tr>';
    echo'</table>';
  }

reg_data();


