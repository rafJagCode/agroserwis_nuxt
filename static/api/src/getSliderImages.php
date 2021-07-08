<?php
function getSliderImages(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . "/../../assets/slides";

  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", ".."]);


  http_response_code(200);
  echo json_encode($cleanedFiles);
}
?>
