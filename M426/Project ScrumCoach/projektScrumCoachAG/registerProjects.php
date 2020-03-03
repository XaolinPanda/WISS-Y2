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
    <title>Projekt registrieren</title>
  </head>
  <body>

    <div class="container">
      <a href="projektleiter.php"><img src="img/logo2.png" alt="logo scrumcoach AG"></a>


      <h1>Projekt registrieren</h1>
      <form action="registerProjects_response.php" method="post">
        <div class="form-group">
          <label for="start">Projektstart</label>
          <input class="form-control" type="date" name="start" value="" required>
        </div>
        <div class="form-group">
          <label for="dauer">Projektdauer in Monaten</label>
          <input class="form-control" type="number" name="dauer" value="" required>
        </div>
        <div class="from-group">
          <label for="beschreibung">Kurzbeschreibung</label>
          <input class="form-control" type="text" name="beschreibung" value="" required>
        </div>
        <button type="submit" class="btn btn-dark" >Projekt registrieren</button>
        <a class="btn btn-dark" href="scrumMaster.php">zurück</a>
      </form>


    </div>

  </body>
</html>
