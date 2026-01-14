<?php
    date_default_timezone_set("Asia/Jakarta");

    $servername = "sql109.infinityfree.com";
    $username = "if0_40859334";
    $password = "zrey1234";
    $dbname = "if0_40859334_zreyya";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "Connected successfully<hr>";
?>