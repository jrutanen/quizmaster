<?php
    include 'db.php';
    if(isset($_GET['status'])) {
        $status = ($_GET["status"]);
        if ($status == 0) {
            $sql = "UPDATE game SET running=0 WHERE id=1";
        } else {
            $sql = "UPDATE game SET running=1 WHERE id=1";
        }

        $result = $conn->query($sql);

        echo $_GET['status'];
    } else {
        echo "ERROR - No Parameter given.";
    }
    $conn->close();
?>