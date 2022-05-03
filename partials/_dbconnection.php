<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "travel_management";

    // creating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Connection to DB failed !!! " .mysqli_connect_error(). "<br>");
    }
?>