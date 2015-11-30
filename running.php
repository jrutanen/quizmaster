<?php
    include 'db.php';

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