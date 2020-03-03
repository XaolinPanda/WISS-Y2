<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <title>Login</title>
</head>
<body>

  <div class="container">
    <a href="index.php"><img src="img/logo2.png" alt="logo scrumcoach AG"></a>
    <h1>Login:</h1>
    <form class="" action="login_response.php" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" value="" required>
        <label for="password">Passwort</label>
        <input class="form-control" type="password" name="password" value="" required>
      </div>
      <button type="submit" class="btn btn-dark">Login</button>
      <a class="btn btn-dark" href="index.php">zurück</a>
    </form>

  </div>


</body>
</html>
