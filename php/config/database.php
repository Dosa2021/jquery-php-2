<?php

class Database {
    private array $config;
    private ?PDO $pdo = null;

    public function __construct() {
        $this->config = require __DIR__ . '/db.php';
    }

    public function connect(): PDO {
        if ($this->pdo === null) {
            try {
                $this->pdo = new PDO(
                    sprintf(
                        'mysql:host=%s;port=%s;dbname=%s;charset=%s',
                        $this->config['host'],
                        $this->config['port'],
                        $this->config['dbname'],
                        $this->config['charset']
                    ),
                    $this->config['user'],
                    $this->config['password'],
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die('データベース接続失敗: ' . $e->getMessage());
            }
        }

        return $this->pdo;
    }
}
