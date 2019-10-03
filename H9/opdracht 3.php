<html>
    <body>
    <?php
    try{
        $db = new PDO("mysql:host=localhost;dbname=cijferlijst",
        "root");
        $query=$db->prepare("select * from leerlingen");
        $query->execute();
        $result = $db 

    }
    ?>
    </body>
</html>