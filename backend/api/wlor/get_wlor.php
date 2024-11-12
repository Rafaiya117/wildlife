<?php
include '../../_a.php';

// must_login();

$offset = 0;
$limit = 200;
$data = $db->select('SELECT id, raw_json from wlor_raw where published="published"  order by id desc  limit ? OFFSET ? ;', $limit, $offset);
$count = $db->select('SELECT count(id) as `count` from wlor_raw where published="published";');




json_send([    
    'total' => $count[0]['count'],
    'offset' => $offset,
    'limit' => $limit,
    'data' => $data,
    'fire' => 'published_wlor_bkend'
]);

