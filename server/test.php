<?php
header('Content-Type: application/json');
$response = array(
    'status' => 'ON',
    'data' => array(
        'conac' => 'conacconac'
    )
);


echo json_encode($response);
?>
