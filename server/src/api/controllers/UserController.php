<?php
require_once(__DIR__ . '/../config/database.php');

class UserController {
  public function register($data) {
    $db = new Database();
    $conn = $db->getConnection();

    // Validate and sanitize input
    $email = htmlspecialchars($data['email']);
    $password = password_hash($data['password'], PASSWORD_BCRYPT);

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->execute([$email, $password]);

    return json_encode(["message" => "User registered!"]);
  }
}
?>