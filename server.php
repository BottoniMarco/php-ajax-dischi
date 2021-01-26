<?php
  include __DIR__ . "/template/db.php";
  header("Content-type: application/json");

  $genre =strtolower( $_GET["genre"]);

  if (empty($genre)) {
    $filteredDatabase = $database;
  } else {
    $filteredDatabase = [];

    foreach ($database as $cd) {
      if (strtolower( $cd["genre"]) == $genre) {
        $filteredDatabase[] = $cd;
      }
    }
  }


  echo json_encode($filteredDatabase) ;



  // foreach ($database as $album ) {
  //   foreach ($album as $genere => $value) {
  //     if ($genere == $selected_genre) {
  //       echo json_encode($value. "    ");
  //     }
  //   }
  // }
  // $selected_genre = $_GET["genre"];
  // echo $selected_genre;
?>
