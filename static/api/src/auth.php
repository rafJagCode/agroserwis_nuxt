<?php
function auth(){
  session_name('AGROSERWIS');
  session_start();

  if(!isset($_SESSION['token'])){
    http_response_code(400);
    echo json_encode(['message' => 'Wymagane logowanie']);
    return;
  }

  $token = $_SESSION['token'];

  $dir = __DIR__ . '/../../content/a.json';
  $credentials = json_decode(file_get_contents($dir), true);



  if ($token !== $credentials['token']) {
    http_response_code(400);
    echo json_encode(['message' => 'Wymagane logowanie']);
    return;
  }


  http_response_code(200);
  echo json_encode(['message' => 'Zautentyfikowano poprawnie']);
}
?>
