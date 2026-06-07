<?php
require_once __DIR__ . '/../config/Database.php';

class TestModel {
    private $db;

    public function __construct() {
        // データベース接続を初期化
        $database = new Database();
        $this->db = $database->connect();
    }

    // 全ユーザーを取得する
    public function getAllUsers() {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllTests() {
        $stmt = $this->db->prepare("SELECT * FROM test_user");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // 特定のIDのユーザーを取得する
    public function getUserById($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    // 新規ユーザーを登録する
    public function createUser($name, $email) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email
        ]);
    }
}