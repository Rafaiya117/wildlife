<?php
include '../../_a.php';



$dat = $db->select('SELECT * from organization GROUP BY org_name;',);

json_send($dat);