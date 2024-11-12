<?php
include '../../_a.php';

// must_login();
$_USER = ['id'=> $_SESSION['id']];
$offset = 0;
$limit = 1000;

$data = $db->select('SELECT id, raw_json from wlor_raw where created_by_uid = ? order by id desc limit ? OFFSET ? ;', $_USER['id'], $limit, $offset);
$count = $db->select('SELECT count(id) as `count` from wlor_raw where created_by_uid = ?;', $_USER['id']);



json_send([    
    'count' => $count[0]['count'],
    'offset' => $offset,
    'limit' => $limit,
    'data' => $data,
    'fire' => 'my_wlor_bkend'
]);