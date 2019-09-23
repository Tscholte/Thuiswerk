<html>
<body>
<?php
    $getal1 = 12;
    $getal2 = 15;
    if($getal1 < $getal2){
        $getal1 = $getal2 *2;
        $getal2 = $getal2+$getal1;
        echo "$getal2";
    }else{
        $getal1 = $getal1*2;
        $getal1 = $getal1+$getal2;
        echo "$getal1";
    }
?>
</body>
</html>