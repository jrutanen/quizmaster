<?php
    include 'db.php';
    $sql = mysqli_query($conn, "SELECT player, count(correct) as score "
                              ."FROM results "
                              ."GROUP BY player");

    $rows = array();

    while($row = mysqli_fetch_assoc($sql)) {
        $rows[] = $row;
    }
    print json_encode($rows);

    $conn->close();
?>