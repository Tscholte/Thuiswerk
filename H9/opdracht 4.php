<html>
<head>
    <title>opdracht 1</title>
</head>
<body>
<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker",
        "root");
    $query = $db->prepare("INSERT INTO gebruikers(username, password) VALUES('ik', '" . sha1('geheim') . "')");
    $query->execute();
}   catch (PDOException $e){
    die("error! : " . $e->getMessage());
}
?>

</body>
</html>