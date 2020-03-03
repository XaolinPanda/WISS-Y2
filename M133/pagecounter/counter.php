<?php
  session_start();

  if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
  }else{
    $_SESSION['counter'] = 1;
  }
  $count = "You have visited this page " . $_SESSION['counter'] . " times"
 ?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page-Counter</title>
  </head>
  <body>
    <?php
      echo $count;
     ?>
  </body>
</html>
