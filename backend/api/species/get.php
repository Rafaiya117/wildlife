<?php
include '../../_a.php';

// must_login();

// $offset = 0;
// $limit = 10;

$data = $db->select('SELECT * from species ORDER BY english_name ASC, bangla_name ASC ;',);
// $count = $db->select('SELECT count(id) as `count` from species ;');




// json_send([    
//     'total' => $count[0]['count'],
//     'offset' => $offset,
//     'limit' => $limit,
//     'data' => $data
// ]);

json_send($data);
