<?php
  include __DIR__ . "/template/db.php";
  header("Content-type: application/json");

  echo json_encode($database) ;

  foreach ($database as $album ) {
    foreach ($album as $genere => $value) {
      if ($genere == $selected_genre) {
        echo json_encode($value. "    ");
      }
    }
  }
  $selected_genre = $_GET["genre"];
  echo $selected_genre;
?>
