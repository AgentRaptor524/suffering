<?php

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "example_1_7_2022";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $queryUpdate = "DELETE FROM student_information WHERE studentID =" . $ID;

    if ($conn->query($queryUpdate) === TRUE) {
        header("student_information_table.php");
    } else {
        header("student_information_table.php");
    }
} else {
    header("student_information_table.php");
}