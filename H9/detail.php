<html>
<head>
    <title>opdracht 2</title>
</head>
<body>
<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker",
        "root");
    $query = $db->prepare("SELECT * FROM fietsen WHERE id = "
        . $_GET['id']);
    $query->execute();
    $result = $query-> fetchAll(PDO::FETCH_ASSOC);
    echo "<table>";
    foreach($result as $data){
        echo "artikelnummer: " . $data['id'] . "<br>";
        echo "merk: " . $data["merk"] . "<br>";
        echo "type: " . $data["type"] . "<br>";
        echo "prijs: &euro; " .
            number_format($data["prijs"],2,",",".") . "<br><br>";
        echo "<br>";
    }
    echo "</table>";
}   catch (PDOException $e){
    die("error! : " . $e->getMessage());
}
?>

</body>
</html>