<?php
function updateImages($folder){

  $requestData = json_decode(file_get_contents('php://input'), true);

  //Divide images by type
  $files = [];
  $dataURLs = [];
  foreach($requestData as $image){
    if($image['type'] === 'file'){
      array_push($files, $image['src']);
    }
    if($image['type'] === 'dataURL'){
      array_push($dataURLs, ["name" => $image['name'], "src" => $image['src']]);
    }
  }

  //Remove files that was removed on frontend side
  $dir    = __DIR__ . "/../../assets/{$folder}";

  $currentFiles = scandir($dir);
  $cleanedFiles = array_diff($currentFiles, [".", ".."]);

  $filesToRemove = array_diff($cleanedFiles, $files);

  foreach($filesToRemove as $fileName){
    unlink($dir . "/{$fileName}");
  }

  //Add images added on fronted side
  foreach($dataURLs as $addedImage){
    $data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $addedImage['src']));
    file_put_contents($dir . "/{$addedImage['name']}", $data);
  }

  http_response_code(200);
  echo "Updated";

}
?>
