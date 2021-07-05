<?php
function getDepartmentPartners($department){
  header('Content-Type: application/json');
  $departmentPath    = __DIR__ . "/../../content/departments/{$department}.json";

  $departmentString = file_get_contents($departmentPath);
  $departmentJson = json_decode($departmentString, true);

  $partnersList = $departmentJson['partners'];


  $partners = [];
  foreach($partnersList as $partner){
    $partnerPath = __DIR__ . "/../../content/partners/{$partner}.json";
    $partnerString = file_get_contents($partnerPath);
    $partnerJson = json_decode($partnerString, true);
    array_push($partners, $partnerJson);
  }

  http_response_code(200);
  echo json_encode($partners);
}
?>
