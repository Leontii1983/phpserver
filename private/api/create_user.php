<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../classes/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$data = json_decode(file_get_contents("php://input"));

// print_r($data);

$user->firstname = $data->firstname;
$user->lastname = $data->lastname;
$user->email = $data->email;
$user->mobilenumber = $data->mobilenumber;
$user->password = $data->password;

if (!empty($user->firstname) && !empty($user->lastname) && !empty($user->email) && !empty($user->mobilenumber) && !empty($user->password)) {
  $user->createUser();
  http_response_code(200);

  echo json_encode(array("mesage" => "User created"));
} else {
  http_response_code(400);

  echo json_encode(array("mesage" => "User can not create."));
}
