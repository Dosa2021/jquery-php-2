<?php
require __DIR__ . '/vendor/autoload.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];
$path = rtrim($requestUri, '/') ?: '/';

switch (true) {
    case $path === '/api/users' && $requestMethod === 'GET':
        require __DIR__ . '/api/users.php';
        break;

    case $path === '/' && $requestMethod === 'GET':
        require __DIR__ . '/views/home.php';
        break;

    case $path === '/hoge' && $requestMethod === 'GET':
        require __DIR__ . '/views/hoge.php';
        break;
        
    default:
        http_response_code(404);
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode(['error' => 'Not Found'], JSON_UNESCAPED_UNICODE);
        break;
}