<?php
function updateFile(){
  $file = $_FILES['file']['tmp_name'];
  $fileName = $_POST['fileName'];
  $dir    = __DIR__ . '/../../documents/' . $fileName;


  if (move_uploaded_file($file, $dir)){
    http_response_code(200);
    echo "Updated";
  }
  else{
    http_response_code(500);
    echo "Not updated";
  }
}
?>
