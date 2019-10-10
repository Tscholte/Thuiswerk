<html>
    <body>
        <?php
        session_start();
        if ($_SESSION['login'] == true){
            echo "u bent ingelogd als ";
            echo $_SESSION['username'];

        } else{
            echo "u bent niet ingelogd";
        }


        ?>
    </body>
</html>