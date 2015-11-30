//select player, question, count(correct) from results group by player, question;
<?php
    include 'db.php';
    $sql = mysqli_query($conn, "SELECT player, question, count(correct) "
                              ."FROM results "
                              ."GROUP BY player, question");

    $rows = array();
    while($row = mysqli_fetch_assoc($sql)) {
        $rows[] = $row;
    }
    print json_encode($rows);

    $conn->close();
?>