<html>
    <head>
        <title>opdracht 1</title>
    </head>
    <body>
        <?php
         try{
            $db = new PDO("mysql:host=localhost;dbname=fietsenmaker",
                "root");
            $query = $db->prepare("SELECT * FROM fietsen");
            $query->execute();
            $result = $query-> fetchAll(PDO::FETCH_ASSOC);
            echo "<table>";
            foreach($result as $data){
                echo "<tr>";
                echo "<td>" . $data["merk"] . "</td>";
                echo "<td>" . $data["type"] . "</td>";
                echo "<td>" . $data["prijs"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
         }   catch (PDOException $e){
             die("error! : " . $e->getMessage());
         }
        ?>

    </body>
</html>