<html>
<head> <title>opdracht 1</title></head>
    <body>
        <?php
            date_default_timezone_set("Europe/amsterdam");
            $datum = date("D j F Y");
            $dagJaar = date("z");
            $dag = date("D");
            $dagWeek = date("w");
            $maand = date("F");
            $dagenInMaand = date("t");
            $letter = "e ";

            echo "Het is vandaag: $datum";
            echo "<br>";
            echo "Vandaag is het de $dagJaar$letter dag van het jaar";
            echo "<br>";
            echo "$dag is de $dagWeek$letter dag van de week";
            echo "<br>";
            echo "de maand $maand heeft in totaal $dagenInMaand dagen";
            echo "<br>";

            if(date("L") ==0){
                echo "Het jaar 2019 is geen schrikkel jaar";
            }else{
                echo "Het jaar is wel een schrikkel jaar";
            }
        ?>
    </body>
</html>