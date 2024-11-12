<?php
include '../../_a.php';



$data = $db->select('SELECT * from wlor_raw where  published="published" ;',);

//$print = [];

json_send($data);
         
    







