<html>
<body>
<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=gastenboek",
        "root");
    if (isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, "name",
            FILTER_SANITIZE_STRING);
        $bericht = filter_input(INPUT_POST, "bericht",
            FILTER_SANITIZE_STRING);
        $query = $db->prepare("SELECT * FROM berichten WHERE ");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->execute();
        echo "<br>";
    }
} catch(PDOException $e){
    die("Error!: " . $e->getMessage());
}
?>
<br>
<form method="post" action="">
    <label for="naam">naam</label>
    <input type="text" name="naam">
    <br>
    <label for="bericht">bericht</label>
    <br>
    <textarea name="bericht"></textarea><br>
    <input type="submit" name="submit" value="submit">
    <br><br><br><br><hr>
    <?php
    foreach ()
    ?>
</form>
</body>
</html>