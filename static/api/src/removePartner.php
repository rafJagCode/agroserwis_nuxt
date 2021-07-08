<?php
function removePartner($partner){

  $dir    = __DIR__ . "/../../content/partners/{$partner}.json";

  if(unlink($dir)){
    http_response_code(200);
    echo "Removed";
  }
  else{
    http_response_code(500);
    echo "Partner could not be removed";
  }

}
?>
