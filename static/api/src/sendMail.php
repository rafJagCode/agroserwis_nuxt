<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail()
{
  $dir = __DIR__ . '/../PHPMailer/';
  require $dir . 'Exception.php';
  require $dir . 'PHPMailer.php';
  require $dir . 'SMTP.php';

  header('Content-Type: application/json');
  $json = json_decode(file_get_contents('php://input'), true);
  $to = $json['to'];
  $from = $json['from'];
  $subject = $json['subject'];
  $message = $json['message'];

//Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->CharSet = "UTF-8";
//  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username = 'agroserwis.amelen@gmail.com';                     //SMTP username
    $mail->Password = 'agro_serwis#1997';                               //SMTP password
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($from);
    $mail->addAddress($to);
    $mail->addReplyTo($from);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = '<br>' . $message;

    $mail->send();

    http_response_code(200);
    echo json_encode(["message" => "Wiadmość wysłana poprawnie"]);
    return;
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Nie udało wysłać się wiadomości. Jeżeli problem będzie się powtarzał skontaktuj się z nami telefonicznie']);
    return;
  }
}
?>
