<?php
function is_auth(){
  session_name('AGROSERWIS');
  session_start();

  if(!isset($_SESSION['token'])){
    return false;
    return;
  }

  $token = $_SESSION['token'];

  $dir = __DIR__ . '/../../content/a.json';
  $credentials = json_decode(file_get_contents($dir), true);



  if ($token !== $credentials['token']) {
    return false;
  }

  return true;
}
?>
