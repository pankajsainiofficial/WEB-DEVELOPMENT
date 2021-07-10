<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pricepare";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("connection is not successfully connection :". mysqli_connect_error());
    }
?>
