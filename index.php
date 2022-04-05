<?php
$kysymys = "1/2. Mikä on enkeli kaksi kirjainta taaksepäin?";
$vastaus = "clicjg";

// keksi oikein_sivulle aina joku salaisempi tiedostonimi, ettei käyttäjä arvaa löytää sinne
$oikein_sivu = "2-dsjdhasujasd.php"; 
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
    <div>
      <b>Haasteen aiemmat voittajat:</b>
      <pre><?=file_get_contents("voittajat.txt")?></pre>
    </div>
  </form>
  </body>
</html>