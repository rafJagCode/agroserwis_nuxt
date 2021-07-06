<?php
function getDepartmentFooterInfo($department){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/footer_info/' . $department . '.json';

  $departmentString = file_get_contents($dir);
  $departmentJson = json_decode($departmentString);

  http_response_code(200);
  echo json_encode($departmentJson);
}
?>
