<?php

require './config.php';

if (isset($_GET["id"]) && isset($_GET["checked"])) {
    $checklistid = $_GET["id"];
    $checked = $_GET["checked"];
    
    $sql = "UPDATE checklist SET checked=$checked WHERE checklist_id=$checklistid";
    $result = mysqli_query($connect, $sql);

    if (!$result) {
        echo "fail";
    } else {
        echo "$checked";
    }    
}
else {
    echo "additional parameter is required";
}

 ?>
