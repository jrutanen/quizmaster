<?php
    ini_set('display_errors', 1);
    if(isset($_GET['user']) && isset($_GET['quiz']) && isset($_GET['question'])) {
        $quiz = ($_GET["quiz"]);
        $user = ($_GET["user"]);
        $question = ($_GET["question"]);

        $server = 'localhost';
        $username = 'web';
        $dbname = 'quiz_db';

        //Create connection
        $conn = new mysqli($server, $username, 'pw', $dbname);

        //check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO results (quiz, player, question, correct) "
             . "VALUES (" . $quiz . "," . $user . "," . $question . ",1";

        $result = $conn->query($sql);

        $conn->close();
    } else {
        echo "ERROR - No Parameter given.";
    }
?>