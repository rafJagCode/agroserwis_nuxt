<?php
function getPartnersSlugs(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/partners';
  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", ".."]);

  $partners = [];
  foreach($cleanedFiles as $file){
    $partnerString = file_get_contents($dir . "/${file}");
    $partnerJson = json_decode($partnerString, true);
    $fileWithoutExtension = $without_extension = pathinfo($file, PATHINFO_FILENAME);
    array_push($partners, $fileWithoutExtension);
  }


  http_response_code(200);
  echo json_encode($partners);
}
?>
