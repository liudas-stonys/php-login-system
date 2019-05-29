<?php

require_once "constants.php";
require_once "utils/functions.php";

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!mysqli_connect_errno()) {
    console_log("Connected successfully!");
} else {
    console_log("Database error: " . mysqli_connect_error());
    exit();
}
