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

        $sql = mysqli_query($conn, "SELECT * FROM questions WHERE quiz=" . $_GET['quiz']);

        $rows = array();
        while($row = mysqli_fetch_assoc($sql)) {
            $rows[] = $row;
        }
        print json_encode($rows);
        $conn->close();
    } else {
        echo "ERROR - No Parameter given.";
    }
?>