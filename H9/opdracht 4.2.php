<html>
<head>
    <title>opdracht 1</title>
</head>
<body>
<?php

use http\Header;

try{
        $db = new PDO("mysql:host=localhost;dbname=fietsenmaker",
            "root");
        session_start();
        if (isset($_POST['inloggen'])){
            $username = filter_input(INPUT_POST, "username",
                FILTER_SANITIZE_STRING);
            $password = sha1($_POST['password']);
            $query = $db->prepare("SELECT * FROM gebruikers WHERE username = :user AND password = :pass");
            $query->bindParam("user", $username);
            $query-> bindParam("pass", $password);
            $query->execute();
            if ($query->rowCount() == 1){
                echo "de juiste gegevens zijn ingevuld" . "<br>";
                $_SESSION['login'] = true;
                $_SESSION['username'] = $username;
                header('Location: opdracht 5.php');
            } else {
                echo "de gegevens die zijn ingevuld zijn fout";
                session_destroy();
            }
            echo "<br>";
        }
    }   catch (PDOException $e){
        die("error! : " . $e->getMessage());
    }
?>
<form method="post" action="">
    <label >Username</label>
    <input type="text" name="username"><br>

    <label>Password</label>
    <input type="password" name="password"><br>

    <input type="submit" name="inloggen" value="inloggen">
</form>

</body>
</html>