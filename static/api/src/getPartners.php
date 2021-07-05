<?php
function getPartners(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/partners';
  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", "..", "default.json"]);

  $partners = [];
  foreach($cleanedFiles as $file){
    $partnerString = file_get_contents($dir . "/${file}");
    $partnerJson = json_decode($partnerString, true);
    $partnerJson["fileName"] = pathinfo($file, PATHINFO_FILENAME);
    array_push($partners, $partnerJson);
  }
  http_response_code(200);
  echo json_encode($partners);
}
?>
