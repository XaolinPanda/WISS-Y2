<?php
include('dbConnect.php');
session_start();

$projektstart = $_POST['start'];
$projektdauer = $_POST['dauer'];
$beschreibung = $_POST['beschreibung'];

if($connect->query("INSERT INTO projects (projektstart, projektdauer, beschreibung) VALUES ('$projektstart', '$projektdauer', '$beschreibung')")) {
  header('Location: projektleiter.php');
}
else {
  echo "Daten nicht eingetragen";
  echo $connect->error;
}
 ?>
