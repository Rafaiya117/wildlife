<?php
include '../../_a.php';



$dat = $db->select('SELECT * from forest_divisions ORDER BY forest_division_name ASC, range_name ASC, beat ASC ;',);

json_send($dat);