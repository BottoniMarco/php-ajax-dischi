<?php
  // include __DIR__ . '/template/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css">
  <title>Document</title>
</head>
<body>
  <div id="app">
    <header>
      <i class="fab fa-spotify"></i>
    </header>
    <main>
      <div id="wrapper">
        <div class="album" v-for="album in albums" >
          <img :src="album.poster" alt=""
          >
          <h4 >{{ album.title }}</h4>
          <div class="low-specs">
            <p>{{ album.author }}</p>
            <p>{{ album.year }}</p>
          </div>
        </div>
        <form  action="server.php" method="get">
          <select  name="genre">
            <option value="All">All</option>
            <option value="Rock">Rock</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option>
            <option value="Metal">Metal</option>
          </select>
          <button type="submit" name="button">INVIA</button>
        </form>
      </div>
    </main>
  </div>
  <script src="js/app.js" charset="utf-8"></script>
</body>
</html>
