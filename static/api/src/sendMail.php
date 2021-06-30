<?php
function sendMail()
{
  header('Content-Type: application/json');
  $json = json_decode(file_get_contents('php://input'), true);
  $to      = $json['to'];
  $subject = $json['subject'];
  $message = $json['message'];
  $headers = array(
    'From' => $json['from'],
    'Reply-To' => $json['from'],
    'X-Mailer' => 'PHP/' . phpversion()
  );

  $success = mail($to, $subject, $message, $headers);
  try{
    if(!$success){
      throw new Exception();
    }
  }
  catch(Exception $exception){
    http_response_code(500);
    echo json_encode( [ 'message' => 'Nie udało wysłać się wiadomości. Jeżeli problem będzie się powtarzał skontaktuj się z nami telefonicznie' ]);
    return;
  }


  http_response_code(200);
  echo json_encode(["message"=>"Wiadmość wysłana poprawnie"]);
}
  ?>
