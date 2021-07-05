<?php
function getSlides($department){
  header('Content-Type: application/json');
  $departmentPath    = __DIR__ . "/../../content/departments/{$department}.json";

  $departmentString = file_get_contents($departmentPath);
  $departmentJson = json_decode($departmentString, true);

  $partnersList = $departmentJson['slides'];

  $slides = [];
  foreach($partnersList as $partner) {
    $dir = __DIR__ . "/../../assets/slides/{$partner}";
    $files = scandir($dir);
    $cleanedFiles = array_diff($files, [".", ".."]);
    foreach($cleanedFiles as $file){
      array_push($slides, "{$partner}/{$file}");
    }
  }

  http_response_code(200);
  echo json_encode($slides);
}
?>
