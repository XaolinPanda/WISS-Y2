<?php
session_start();
$vorname = $_SESSION['vorname'];
$nachname = $_SESSION['nachname'];
 ?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Scrum-Master</title>
  </head>
  <body>

    <div class="container">
      <a href="scrumMaster.php"><img src="img/logo2.png" alt="logo scrumcoach AG"></a>
      <h1>Hallo <?php echo $vorname . " " . $nachname ?>, was möchtest du tun?</h1>
      <a class="btn btn-dark" href="searchProjects.php">Projekte suchen</a>
      <a class="btn btn-dark" href="logout.php">Logout</a>
    </div>

  </body>
</html>
