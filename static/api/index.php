<?php

require_once __DIR__ . '/src/functions.php';

// Default index page
router('GET', '^/api/$', function() {
    echo '<a href="users">List users</a><br>';
});

// GET request to /users
router('GET', '^/api/users$', function() {
    echo '<a href="users/1000">Show user: 1000</a>';
});

// With named parameters
router('GET', '^/api/users/(?<id>\d+)$', function($params) {
    echo "You selected User-ID: ";
    var_dump($params);
});

// POST request to /users
router('POST', '^/api/users$', function() {
    header('Content-Type: application/json');
    $json = json_decode(file_get_contents('php://input'), true);
    echo json_encode(['result' => 1]);
});

router('POST', '^/api/send-mail$', function() {
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
});

header("HTTP/1.0 404 Not Found");
echo '404 Not Found';
?>
