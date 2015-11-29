<?php
    ini_set('display_errors', 1);
    if(isset($_GET['status'])) {
        $status = ($_GET["status"]);
        if ($status == 0) {
            $sql = "UPDATE game SET running=0 WHERE id=1";
        } else {
            $sql = "UPDATE game SET running=1 WHERE id=1";
        }

        $server = 'localhost';
        $username = 'web';
        $dbname = 'quiz_db';

        //Create connection
        $conn = new mysqli($server, $username, 'pw', $dbname);

        //check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "ok";
        } else {
            echo "ERROR - No was not able to change value.";
        }

        $conn->close();
        echo $_GET['status'];
    } else {
        echo "ERROR - No Parameter given.";
    }
?>