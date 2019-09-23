<html>
    <body>
    <?php

    $tijd = date("G");

    switch ($tijd){
        case $tijd >= 0 && $tijd<6: echo "het is nacht";
        break;
        case $tijd >= 6 && $tijd<12: echo "het is ochtend";
        break;
        case $tijd >= 12 && $tijd<18: echo "het is middag";
        break;
        case $tijd >= 18 && $tijd<24: echo "het is avond";
        default: echo "er is iets mis";
        break;
    }
    ?>
    </body>
</html>