<?php
function logout(){
  session_name('AGROSERWIS');
  session_start();
  session_unset();

  http_response_code(200);
  echo json_encode(['message' => 'Wylogowano']);
}
?>
