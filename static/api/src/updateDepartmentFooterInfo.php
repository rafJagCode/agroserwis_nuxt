<?php
function updateDepartmentFooterInfo($department){
  $dir    = __DIR__ . '/../../content/footer_info/' . $department . '.json';

  $requestData = json_decode(file_get_contents('php://input'));
  echo json_encode($requestData);

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
