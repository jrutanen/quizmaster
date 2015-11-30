//select player, question, count(correct) from results group by player, question;
<?php
    include 'db.php';
    $sql = mysqli_query($conn, "SELECT player, question, count(correct) "
                              ."FROM results "
                              ."GROUP BY player, question");

    $rows = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($sql)) {
        if($i == 0) {
            echo $row;
            $i = 1;
        } else {
            $rows[] = $row;
        }
    }
    print json_encode($rows);

    $conn->close();
?>