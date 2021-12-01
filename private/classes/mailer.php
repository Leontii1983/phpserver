<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/private/api/libs/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/private/api/libs/PHPMailer/src/SMTP.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/private/api/libs/PHPMailer/src/Exception.php';


class Mailer
{

  public function sendEmail($email, $subject, $message)
  {

    $mail = new PHPMailer(true);

    try {
      //Setings for server
      $mail->SMTPDebug = 2;
      $mail->isSMTP(true);
      $mail->Host = 'smtp-mail.outlook.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'technic.ifc@outlook.com';
      $mail->Password = 'jWnJ2-s+eF<MrGTMK';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 587;

      $mail->setFrom('technic.ifc@outlook.com', 'Angry admin');
      $mail->addAddress($email);
      $mail->Subject = $subject;
      $mail->msgHTML($message);

      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );

      $mail->send();
      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error :{$mail->ErrorInfo}";
    }
  }
}
