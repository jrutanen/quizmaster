<?php
    $data = file_get_contents ('./data/musicquiz.json');
    echo json_encode($data);
?>