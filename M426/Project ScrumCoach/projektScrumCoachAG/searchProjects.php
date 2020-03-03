<?php
include('dbConnect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Offene Projekte</title>
  </head>
  <body>
    <div class="container">
      <a href="scrumMaster.php"><img src="img/logo2.png" alt="logo scrumcoach AG"></a>
      <h1>Offene Projekte</h1>

    <table class="table">
      <tr>
        <th>Projektstart</th>
        <th>Projektdauer in Monaten</th>
        <th>Beschreibung</th>
      </tr>


<?php
if($query = $connect->query("SELECT * FROM projects")) {
  if($query->num_rows > 0) {
    while($row = $query->fetch_object()) {
      echo "<tr><td>$row->projektstart</td>";
      echo "<td>$row->projektdauer</td>";
      echo "<td>$row->beschreibung</td></tr>";
    }
  }
  else {
    echo "<h4>Im Moment sind keine Projekte offen</h4>";
  }
}
else {
  echo "Daten nicht eingetragen";
  echo $connect->error;
}
 ?>


</table>

<a class="btn btn-dark" href="scrumMaster.php">zurück</a>
<a class="btn btn-dark" href="logout.php">Logout</a>
</div>
</body>
</html>
