<?php

return [
    'host' => getenv('DB_HOST') ?: (file_exists('/.dockerenv') ? 'mysql' : '127.0.0.1'),
    'port' => getenv('DB_PORT') ?: '3306',
    'dbname' => getenv('DB_NAME') ?: 'test',
    'user' => getenv('DB_USER') ?: 'root',
    'password' => getenv('DB_PASSWORD') ?: 'root_password',
    'charset' => 'utf8mb4',
];
