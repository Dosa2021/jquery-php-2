<?php
    var_dump('fuga--------');
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];
$path = rtrim($requestUri, '/') ?: '/';

var_dump('p-fuga-------');
var_dump($path);



?>