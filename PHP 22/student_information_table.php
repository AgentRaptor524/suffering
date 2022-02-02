<!doctype html>
<html lang="en">
<head>
</head>
<body>
<p><a href="insertStudentsForm.php">Insert information here</a></p>


<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "IDempty") {
        echo "<p><b>Error pleas try clicking update again</b></p>";
    }
}
if (isset($_GET["status"])) {
    if ($_GET["status"] == "updated") {
        echo "<p><b>Record updated</b></p>";
    }
    if ($_GET["status"] == "failed") {
        echo "<p><b>Record failed to updated</b></p>";
    }
}
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "example_1_7_2022";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}

if ($queryStudents = $conn->query("SELECT * FROM student_information")) {

    echo "<table border='1'>";
    echo "<caption>";
    echo "Number of students is: " . $queryStudents->num_rows;
    echo "</caption>";
    echo "<th>";
    echo "Student ID" . "</th><th>" . "First Name" . "</th><th>" . "Last Name" . "</th><th>" . "Age" . "</th><th>" . "Home School" . "</th><th>" . "Update Record" . "</th>";
    echo "</th>";
    while ($rows = $queryStudents->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo "{$rows['ID']}" . "</td>
        <td>" . "{$rows['first_name']}" . "</td>
        <td>" . "{$rows['last_name']}" . "</td>
        <td>" . "{$rows['age']}" . "</td>
        <td>" . "{$rows['home_school']}" . "</td>
        <td>" . "<a href='updateForm.php?ID={$rows['ID']}'>update</a>" . "</td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

}


$conn->close();
?>
</body>
</html>