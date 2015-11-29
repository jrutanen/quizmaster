<?php
    ini_set('display_errors', 1);
    $server = 'localhost';
    $username = 'web';
    $dbname = 'quiz_db';

    //Create connection
    $conn = new mysqli($server, $username, 'pw', $dbname);

    //check connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT running FROM game WHERE id=1";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo $row["running"];
    } else {
        echo "ERROR - No running status available.";
    }

    $conn->close();
?>