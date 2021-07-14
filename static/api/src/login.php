<?php
function login(){
  $requestData = json_decode(file_get_contents('php://input'), true);

  $dir = __DIR__ . '/../../content/a.json';
  $credentials = json_decode(file_get_contents($dir), true);

  if (!password_verify($requestData['password'], $credentials['password'])) {
    http_response_code(400);
    echo json_encode(['message' => 'Wprowadzono niepoprawne dane']);
    return;
  }

  $token = openssl_random_pseudo_bytes(16);
  $token = bin2hex($token);
  $credentials['token'] = $token;


  if (!file_put_contents($dir, json_encode($credentials))) {
    http_response_code(500);
    echo json_encode(['message' => 'Wystąpił błąd podczas logowania']);
    return;
  }

//  $oauth = new OAuth(OAUTH_CONSUMER_KEY,OAUTH_CONSUMER_SECRET);
//  $oauth->setToken("token", $token);

  session_set_cookie_params(60*60);
  session_name('AGROSERWIS');
  session_start();
  $_SESSION['token'] = $token;

  http_response_code(200);
  echo json_encode(['message' => 'Zalogowano']);
}
?>
