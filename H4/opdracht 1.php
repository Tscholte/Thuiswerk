<html>
    <body>
    <?php
    $tijd = date("G");

    if($tijd >= 6 && $tijd<12){
        echo "Het is ochtend.";
    }else if($tijd >= 12 && $tijd<18){
        echo "Het is middag.";
    }else if ($tijd >= 18 && $tijd<24){
        echo "Het is avond.";
    }else if($tijd >=0 && $tijd<6){
        echo "Het is nacht.";
    }
    ?>
    </body>
</html>