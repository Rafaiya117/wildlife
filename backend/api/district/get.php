<?php
include '../../_a.php';



$data = $db->select('SELECT * from upazilas ORDER BY district_name ASC, `name` ASC',);

json_send($data);