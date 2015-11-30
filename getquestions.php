<?php
    include 'db.php';
    if(isset($_GET['quiz'])) {

        $sql = mysqli_query($conn, "SELECT * FROM questions WHERE quiz=" . $_GET['quiz']);

        $rows = array();
        while($row = mysqli_fetch_assoc($sql)) {
            $rows[] = $row;
        }
        print json_encode($rows);
    } else {
        echo "ERROR - No Parameter given.";
    }
    $conn->close();
?>