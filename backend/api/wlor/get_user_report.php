<?php
include '../../_a.php';

function user_data(){
    global $db;

$data = $db->select('SELECT id, created_on, created_by_uid, updated_on from `wlor_raw`;',);

echo'<h2 style="margin-left:10px;"><b>Report edited by user</b></h2>';
echo '<table border="1">
<tr>
<th>Report no.<br>রিপোর্ট নং</th>
<th>Date</th>
<th>User Id</th>
<th>Updated Date</th>
</tr>';
for($i=0,$ilen = sizeof($data); $i<$ilen; $i++){

    echo '<tr>';
        echo' <td><a href="#case-details/'.$data[$i]['id'].'">'.$data[$i]['id'].'</a></td>';
        echo' <td>'.$data[$i]['created_on'].'</td>';
        echo' <td>'.$data[$i]['created_by_uid'].'</td>';
        echo' <td>'.$data[$i]['updated_on'].'</td>';
}
echo' </tr>';
echo'</table>';

}


user_data();

//json_send($data);
