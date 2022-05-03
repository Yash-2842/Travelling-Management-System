<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $rating = $_POST['rating'];

    // if($rating == 1)
    // {
    //     echo "1";
    // } else if($rating == 2)
    // {
    //     echo "2";
    // } else if($rating == 3)
    // {
    //     echo "3";
    // } else if($rating == 4)
    // {
    //     echo "4";
    // } else if($rating == 5)
    // {
    //     echo "5";
    // }


    $review = $_POST['review'];

    // echo $review;

    $name = $_SESSION['first_name'];
    // echo $name;

    $ID = $_SESSION['ID'];
    // echo $ID;

    $trip = $_SESSION['visit'];

    // echo $trip;

    include 'partials/_dbconnection.php';

    $sql = "INSERT INTO `comments` (`userid`,`rating`, `review`,`trip`) VALUES ('$ID', '$rating', '$review','$trip')";
    $result = mysqli_query($conn, $sql);

    // if($result){
    //     $showAlert = true;
    // } else {
    //     $showAlert = false;
    // }

    header("location: $trip.php");
}

?>