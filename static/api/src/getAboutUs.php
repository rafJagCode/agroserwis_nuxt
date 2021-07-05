<?php
function getAboutUs(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/about_us.json';
  $aboutUsString = file_get_contents($dir);
  $aboutUsJson = json_decode($aboutUsString);

  http_response_code(200);
  echo json_encode($aboutUsJson);
}
?>
