<?php
function updateFile(){
  $requestData = json_decode(file_get_contents('php://input'));
  $dir    = __DIR__ . '/../../documents/' . $requestData->fileName;

  var_dump($requestData);
  if (file_put_contents($dir, json_encode($requestData->file))){
    http_response_code(200);
    echo "Updated";
  }
  else{
    http_response_code(500);
    echo "Not updated";
  }
}
?>
