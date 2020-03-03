<?php
include("dbConnect.php");

$rolle = "projektleiter";
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$geschlecht = $_POST['geschlecht'];
$firma = $_POST['firma'];
$geburtstag = $_POST['geburtstag'];
$email = $_POST['email'];
$passwort = $_POST['password'];

if($connect->query("SELECT * FROM logindata") == false) {
  $query = $connect->query("CREATE TABLE logindata (rolle VARCHAR(30), vorname VARCHAR(30), nachname VARCHAR(30), firma VARCHAR(30), geschlecht VARCHAR(30), geburtstag DATE, email VARCHAR(30), passwort VARCHAR(255))");
  echo $connect->error;
}

else {
  if($query = $connect->query("INSERT INTO logindata VALUES('$rolle', '$vorname', '$nachname', '$firma', '$geschlecht', '$geburtstag', '$email', '$passwort')")) {

    header('Location: hello.php');
  }
  else {
    $connect->error;
  }

}


 ?>
