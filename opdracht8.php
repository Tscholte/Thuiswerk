<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $leeftijd = 18;
    $stemPas = true;
    if ($leeftijd=>16) {
      echo "je mag scooter rijden";
    }else {
      echo "je mag geen scooter rijden";
    }
    if ($leeftijd>=18) {
      if ($stemPas == true) {
          echo "je mag stemmen";
      }else {
        echo "je mag niet stemmen";
      }
    }else {
      echo "je mag niet stemmen";
    }


    ?>
  </body>
</html>
