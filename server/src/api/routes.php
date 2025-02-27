<?php
require_once(__DIR__ . '/controllers/UserController.php');

header("Access-Control-Allow-Origin: *"); // Allow Vue frontend to access
header("Content-Type: application/json; charset=UTF-8");

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case '/api/register':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $data = json_decode(file_get_contents("php://input"), true);
      $user = new UserController();
      echo $user->register($data);
    }
    break;
  default:
    http_response_code(404);
    echo json_encode(["message" => "Endpoint not found"]);
    break;
}
?>