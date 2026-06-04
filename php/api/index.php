<?php
header('Content-Type: application/json');


// JSONデータを返す
$response = [
    'message' => 'Docker環境のPHPからデータが送信されました！'
];

echo json_encode($response);