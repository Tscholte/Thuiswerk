<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $aircoAan=true
    $uur = date(G);
    $temp = 20;
    $lvh= 80;
    if (uur>17 || uur<8) {
      $aircoAan=false;
    }esle if(temp<20 && lvh<85){
      $aircoAan=false
    }else {
      $aircoAan = true;
    }
    echo "$aircoAan";
     ?>
  </body>
</html>
