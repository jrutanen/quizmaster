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
?>