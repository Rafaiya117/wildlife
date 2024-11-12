<?php
include '../../_a.php';



$data = $db->select('SELECT * from upazilas ORDER BY `name` ASC ;',);

json_send($data);