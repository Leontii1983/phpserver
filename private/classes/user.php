<?php

require '../api/libs/jwt/src/JWT.php';
require '../api/libs/jwt/src/BeforeValidException.php';
require '../api/libs/jwt/src/ExpiredException.php';
require '../api/libs/jwt/src/SignatureInvalidException.php';

require 'mailer.php';

use \Firebase\JWT\JWT;

class User
{

  private $connect;
  private $db_table = "Users";

  public $id;
  public $firstname;
  public $lastname;
  public $email;
  public $mobilenumber;
  public $password;
  public $token;

  public function __construct($db)
  {
    $this->connect = $db;
  }


  public function createUser()
  {
    $sqlQuery = "INSERT INTO " . $this->db_table . "
                 SET
                    firstname = :firstname,
                    lastname = :lastname,
                    email = :email,
                    mobilenumber = :mobilenumber,
                    password = :password,
                    token = :token,
                    is_active = '0',
                    date_time = NOW()
                ";

    $stmt = $this->connect->prepare($sqlQuery);

    $this->firstname = htmlspecialchars(strip_tags($this->firstname));
    $this->lastname = htmlspecialchars(strip_tags($this->lastname));
    $this->email = htmlspecialchars(strip_tags($this->email));
    $this->mobilenumber = htmlspecialchars(strip_tags($this->mobilenumber));
    $this->password = htmlspecialchars(strip_tags($this->password));


    $stmt->bindParam(':firstname', $this->firstname);
    $stmt->bindParam(':lastname', $this->lastname);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':mobilenumber', $this->mobilenumber);

    $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password_hash);

    if (!$this->emailExist()) {
      $this->token = array(
        "iss" => 'http://registration/public', //iss adress or name server which authorize this token
        "aud" => 'http://registration/public', //aud client name with token
        "iat" => 1638208044688,
        "nbf" => 1638208044688,
      );
      $key = 'mysecretkey';
      $jwt = JWT::encode($this->token, $key);
      $stmt->bindParam(':token', $jwt);
      $mailer = new Mailer();
      $subject = 'Email verification';
      $message = "Please verificate you email click on link bellow <a href='http://registration/public/user_verifycation.php?token=' . $jwt . '>Verify</a>'";

      if ($stmt->execute()) {
        $mailer->sendEmail($this->email, $subject, $message);
        return true;
      } else {
        return false;
      }
    } else {
      echo 'With email allready exist';
    }
  }

  public function emailExist()
  {
    $sqlQuery = "SELECT * FROM " . $this->db_table . "
                 WHERE email = ?
                 LIMIT 0,1";

    $stmt = $this->connect->prepare($sqlQuery);

    $this->email = htmlspecialchars(strip_tags($this->email));
    $stmt->bindParam(1, $this->email);

    $stmt->execute();

    $num = $stmt->rowCount();

    if ($num > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      $this->id = $row['id'];
      $this->firstname = $row['firstname'];
      $this->lastname = $row['lastname'];

      return true;
    }

    return false;
  }
}
