<?php

function console_log($data) {
    echo "<script>";
    echo "console.log(". json_encode($data) .")";
    echo "</script>";
}

function alert($data) {
    echo "<script>";
    echo "alert(". json_encode($data) .")";
    echo "</script>";
}
  
function displayImageFromDB($conn) {
    $sql = "SELECT * FROM images";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        echo "<img src=data:image;base64," . $row["image"] . " width='25%' />";
        echo "<img src='data:image/jpeg;base64," . base64_encode($row["imageAlt"]) . "' width='50%' />";
    }
}