<?php
include '../../_a.php';



$data = $db->select('SELECT id, `name`, email, `status`,
                            phone, organization, designation, 
                            `role`, account_active
                            from users;',);
json_send($data);
// print_r($data);
// die();