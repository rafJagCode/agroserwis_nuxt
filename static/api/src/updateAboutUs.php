<?php
function updateAboutUs(){
  $dir    = __DIR__ . '/../../content/about_us.json';

  $requestData = json_decode(file_get_contents('php://input'));
  if (file_put_contents($dir, json_encode($requestData))){
    http_response_code(200);
    echo "Updated";
  }
  else{
    http_response_code(500);
    echo "Not updated";
  }
}
?>
