<html>
    <head>
        <title>opdracht 1</title>
    </head>
    <body>
        <?php
         try{
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root");
            $query = $db->prepare("SELECT * all FROM fietsen");
            $query->execute();
            $result = $query-> fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data){
                echo $data["merk"] . " ";
                echo $data["type"] . " ";
                echo $data["prijs"] . "<br>";
            }
         }   catch (PDOException $e){
             die("error! : " . $e->getMessage());
         }
        ?>

    </body>
</html>