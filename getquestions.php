<?php
    ini_set('display_errors', 1);
    if(isset($_GET['quiz'])) {
        $server = 'localhost';
        $username = 'web';
        $dbname = 'quiz_db';

        //Create connection
        $conn = new mysqli($server, $username, 'pw', $dbname);

        //check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM questions WHERE quiz=" . $_GET['quiz'];

        $result = $conn->query($sql);

        $conn->close();
        echo json_encode($result);
    } else {
        echo "ERROR - No Parameter given.";
    }
?>