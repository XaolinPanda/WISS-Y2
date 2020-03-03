<?php
session_start();
include('dbConnect.php');

$email = $_POST['email'];
$pass = $_POST['password'];

if($query = $connect->query("SELECT email, passwort, vorname, nachname, rolle FROM logindata")) {
  if($query->num_rows > 0) {
    while($row = $query->fetch_object()) {
      $pwd = $row->passwort;
      $ema = $row->email;
      if($pwd == $pass && $ema == $email) {
        $_SESSION['vorname'] = $row->vorname;
        $_SESSION['nachname'] = $row->nachname;
        if($row->rolle == scrumMaster) {
          header('Location: scrumMaster.php');
        }
        else {
          header('Location: projektleiter.php');
        }

      }
      else {
        echo "<SCRIPT type='text/javascript'> //not showing me this
        alert('Email-Adresse oder Passwort falsch');
        window.location.replace(\"login.php\");
        </SCRIPT>";
      }
    }
  }
  else {
    echo "kein eintrag";
  }
}
else {
  echo "keine DB verbindung";
}
?>
