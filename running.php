<?php
    $server = 'localhost';
    $username = 'web';

    //Create connection
    conn = new mysqli($server, $username, 'pw');

    //check connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully";
?>