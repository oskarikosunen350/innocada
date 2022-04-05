<?php
$kysymys = "2/2. Mikä sana löytyy koordinaateista N 61.069089 ja E 28.251744 ?";
$vastaus = "reppu";

// keksi oikein_sivulle aina joku salaisempi tiedostonimi, ettei käyttäjä arvaa löytää sinne
$oikein_sivu = "3-salainenvoittosivu.php"; 


$vaarin = false;
if (isset($_GET["vastaus"])) {
  $v = strtolower(trim($_GET["vastaus"]));
  if ($v == $vastaus) {
    header("Location: " . $oikein_sivu);
  } else {
    $vaarin = true;
  }
}
?>
<html>
  <head>
    <title>Haaste</title>
    <link rel="stylesheet" href="tyylit.css" />
  </head>
  <body>
  <form method="get" action="">
    <div>
      <?=$kysymys?>
    </div>
    <div>
      <input type="text" name="vastaus">
    </div>
    <div>
      <input type="submit">
      <?php
      if ($vaarin) {
        print 'Väärin meni!';
      }
      ?>
    </div>
  </form>
  </body>
</html>