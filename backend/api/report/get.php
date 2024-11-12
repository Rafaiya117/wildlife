<?php
include '../../_a.php';


$fetch = $db->select('SELECT * from trade_report ;',);







json_send($fetch);