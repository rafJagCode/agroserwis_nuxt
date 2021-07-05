<?php
function getDepartments(){
  header('Content-Type: application/json');
  $dir    = __DIR__ . '/../../content/departments';
  $files = scandir($dir);
  $cleanedFiles = array_diff($files, [".", "..", "default.json"]);

  $departments = [];
  foreach($cleanedFiles as $file){
    $departmentString = file_get_contents($dir . "/${file}");
    $departmentJson = json_decode($departmentString, true);
    array_push($departments, $departmentJson);
  }

  $disabled = ['Grójec'];
  $order = ['Zambrów', 'Przasnysz', 'Stare Opole k.Siedlec', 'Białystok'];

  $sortedDepartments = array_map(function($name) use ($departments){
    $searchResult = array_search($name, array_column($departments, 'name'));
    if($searchResult === false) return;
    return $departments[$searchResult];
  }, $order);

  foreach($sortedDepartments as $key => $department){
    if(in_array($department['name'], $disabled)) unset($sortedDepartments[$key]);
    if($department === null) unset($sortedDepartments[$key]);
  };


  http_response_code(200);
  echo json_encode($sortedDepartments);
}
?>
