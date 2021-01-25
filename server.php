<?php
  include __DIR__ . "/template/db.php";
  header("Content-type: application/json");

  echo json_encode($database) ;

  foreach ($database as $album ) {
    foreach ($album as $genere => $value) {
      if ($genere == "genre") {
        // code...
        echo $value. "    ";
      }
    }
  }
  echo "genre: " .$_GET["genre"];
?>
