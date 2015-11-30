<?php
    include 'db.php';
    $sql = mysqli_query($conn, "DELETE FROM results");

    $rows = array();

    while($row = mysqli_fetch_assoc($sql)) {
        $rows[] = $row;
    }

    print json_encode($rows);

    $conn->close();
?>