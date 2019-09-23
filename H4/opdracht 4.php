<html>
<body>
<?php
    $prijs = 127;
    if($prijs > 150){
        $prijsBTW = $prijs * 1.19;
        $verhoging= "19%";
    }else if($prijs < 55){
        $prijsBTW = $prijs*1.11;
        $verhoging= "11%";
    }else{
        $prijsBTW = $prijs*1.16;
        $verhoging= "16%";
    }
    echo "Oude prijs: $prijs. na verhoging van $verhoging is de prijs $prijsBTW.";


?>
</body>
</html>