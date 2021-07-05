<?php
function getDepartmentsSlugs(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/departments';
  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", ".."]);

  $departments = [];
  foreach($cleanedFiles as $file){
    $departmentString = file_get_contents($dir . "/${file}");
    $departmentJson = json_decode($departmentString, true);
    $fileWithoutExtension = $without_extension = pathinfo($file, PATHINFO_FILENAME);
    $department = ['name' => $departmentJson['name'], 'slug'=>$fileWithoutExtension];
    array_push($departments, $department);
  }


  http_response_code(200);
  echo json_encode($departments);
}
?>
