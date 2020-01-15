<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

      <form action="site.php" method="get">
          Name:<input type="text" name="name">
          <input type="submit">
          Age:<input type="text" name="age">
          <input type="submit">
      </form>
      <br>
        Twoja nazwa uzytkownika to <?php echo $_GET["name"] ?><br>
        Twoj wiek to <?php echo $_GET["age"] ?>

  </body>
</html>
