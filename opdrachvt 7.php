<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $spaargeld 800;
      $nogSparen = 1000 - $spaargeld;
      if ($spaargeld<750) {
        echo "je kunt maar beter een baantje zoeken, je moet nog $nogSparen sparen.";
      }else if ($spaargeld=>750 && $spaargeld<1000) {
        echo "je hebt bijna genoeg, je moet nog $nogSparen sparen.";
      }else {
        $spaargeld = ($spaargeld-$spaargeld) - $spaargeld
        echo "je hebt genoeg geld om het product te kopen en je hebt nog $spaargeld euro over.";
      }
     ?>
  </body>
</html>
