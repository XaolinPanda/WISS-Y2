<?php
function wuerfel()
{
  mt_srand((double)microtime()*1000000);
  $zufallszahl = mt_rand(1, 6);
  return $zufallszahl;
}
function zufall()
{
  mt_srand((double)microtime()*1000000);
  $zufallszahl = mt_rand(1, 49);
  return $zufallszahl;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modul 133</title>
</head>
<body>
<h2>Der PHP Würfel generiert eine Zufallszahl zwischen 1 und 6.</h2>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<input type="submit" name="shuffle" value="Würfeln!">
</form>
<?php
if(isset($_POST["shuffle"]))
{
  echo wuerfel();
}
?>
<h2>Der PHP Lottogenerator zieht eine Zufallszahl zwischen 1 und 49.</h2>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<input type="submit" name="zufall" value="Lotto!">
</form>
<?php
if(isset($_POST["zufall"]))
{
  echo zufall();
}
?>
</body>
</html>
