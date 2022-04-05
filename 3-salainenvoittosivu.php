<?php
if (isset($_GET["nimi"])) {
  // Lisätään nimi voittajat.txt tiedostoon
  $nimi = htmlspecialchars($_GET["nimi"]);
  file_put_contents("voittajat.txt", $nimi . "\n", FILE_APPEND);

  // Viedään käyttäjä takaisin etusivulle
  header("Location: index.php");
}
?>
<html>
  <head>
    <title>Voitit haasteen!</title>
    <link rel="stylesheet" href="tyylit.css" />
  </head>
  <body>
  <form method="get" action="">
    <div>
      <b>Voitit haasteen!</b> Syötä alle nimesi lisätäksesi sen voittajien listalle.
    </div>
    <div>
      <input type="text" name="nimi">
    </div>
    <div>
      <input type="submit">
    </div>
  </form>
  </body>
</html>