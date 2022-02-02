<?php
$fName = $_POST['first_name'];
$lName = $_POST['last_name'];
$age = $_POST['age'];
$hSchool = $_POST['home_school'];
if (empty($fName) || empty($lName) || empty($age) || empty($hSchool)) {
    header("insertStudentsForm.php");
} else {

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "example_1_7_2022";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }


    $queryString = "INSERT INTO student_information (first_name,last_name,age,home_school) 
    VALUES ('" . $fName . "','" . $lName . "','" . $age . "','" . $hSchool . "')";


    if ($conn->query($queryString) == true) {
        header("Location:student_information_table.php");
    } else {
        echo "Error:" . $queryString . "<br>" . $conn->error;
    }

    $conn->close();
}
?>