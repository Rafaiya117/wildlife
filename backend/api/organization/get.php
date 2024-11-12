<?php
include '../../_a.php';



$dat = $db->select('SELECT * from organization order by org_name, ranks ;');

json_send($dat);