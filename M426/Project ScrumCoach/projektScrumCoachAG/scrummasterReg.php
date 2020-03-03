<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Registrierung Scrum-Master</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
  <a href="projektleiter.php"><img src="img/logo2.png" alt="logo scrumcoach AG"></a>
  <h1>Registrierung Scrum-Master</h1>


  <form class="" action="scrummasterReg_response.php" method="post">

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="vorname">Vorname</label>
        <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Vorname" required>
      </div>
      <div class="form-group col-md-6">
        <label for="nachname">Nachname</label>
        <input type="text" class="form-control" id="nachname" name="nachname" placeholder="Nachname" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group">
        <label for="geschlecht">Geschlecht</label>
        <select class="form-control" name="geschlecht" required>
          <option value="weiblich">weiblich</option>
          <option value="maennlich">maennlich</option>
        </select>
      </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-12">
        <label for="firma">Firma</label>
        <input type="text" class="form-control" id="firma" name="firma" placeholder="Firma" required>
      </div>
    </div>
    <div class="form-group">
      <label for="geburtstag">Geburtstag</label>
      <input type="date" class="form-control" id="geburtstag" name="geburtstag" placeholder="Geburtstag" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group col-md-4">

          <label for="password">Passwort</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Passwort" required>

      </div>
      <div class="form-group col-md-4">
        <label for="passwordRep">Passwort wiederholen</label>
        <input type="password" class="form-control" id="passwordRep" name="passwordRep" placeholder="Passwort wiederholen" required>
      </div>
    </div>

    <button type="submit" class="btn btn-primary" >Registrieren</button>
    <button type="reset" class="btn btn-secondary" >Reset</button>


  </form>

  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
