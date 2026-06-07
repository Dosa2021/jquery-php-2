<?php
class Database {
    private $host = "mysql";
    private $db_name = "test";
    private $username = "root";
    private $password = "root_password";
    private $pdo;

    public function connect() {
        if ($this->pdo === null) {
            try {
                // 安全な接続のために文字コード（charset）やエラーモードを設定
                $this->pdo = new PDO(
                    "mysql:host={$this->host};dbname={$this->db_name};charset=utf8mb4",
                    $this->username,
                    $this->password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // エラー時に例外を投げる
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 連想配列で結果を返す
                    ]
                );
            } catch (PDOException $e) {
                die("データベース接続失敗: " . $e->getMessage());
            }
        }
        return $this->pdo;
    }
}