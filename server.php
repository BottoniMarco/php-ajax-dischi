<?php
  include __DIR__ . "/template/db.php";
  header("Content-type: application/json");

  echo json_encode($database) ;
?>
