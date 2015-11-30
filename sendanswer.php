<?php
    include 'db.php';
    if(isset($_GET['user']) && isset($_GET['quiz']) && isset($_GET['question'])) {
        $quiz = ($_GET["quiz"]);
        $user = ($_GET["user"]);
        $question = ($_GET["question"]);

        $sql = "INSERT INTO results (quiz, player, question, correct) "
             . "VALUES (" . $quiz . ",'" . $user . "'," . $question . ",1)";

        $result = $conn->query($sql);

        $conn->close();
    } else {
        echo "ERROR - No Parameter given.";
    }
    $conn->close();
?>