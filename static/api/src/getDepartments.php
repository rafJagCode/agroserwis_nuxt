<?php
function getDepartments(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/departments';
  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", ".."]);

  $departments = [];
  foreach($cleanedFiles as $file){
    $departmentString = file_get_contents($dir . "/${file}");
    $departmentJson = json_decode($departmentString, true);
    array_push($departments, $departmentJson);
  }

  http_response_code(200);
  echo json_encode($departments);
}
?>
