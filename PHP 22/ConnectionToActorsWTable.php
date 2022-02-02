<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Example connection to actors</title>
</head>

<body>
	<?php
		$servername="localhost";
		$username="root";
		$password="root";
		$my_db="sakila";
		//create connection
		$conn= new mysqli($servername,$username,$password,$my_db);
		if($conn->connect_error)
		{
			die("Connections not pog:" . $conn->connect_error);
			
		}
		/*else
			echo "Connection pog";
			run query 
		
		*/
$queryStringMin = "SELECT Min(film.rental_rate) AS MinRental,Max(film.rental_rate) AS MaxRental FROM film";
if ($queryMinMax = $conn->query($queryStringMin)) {
    if($queryMinMax->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<caption>Min</caption>";
        echo "<th>";
        echo "MaxRental" . "</th>
		<th>" . "MinRental" . "</th>";
        echo "</th>";
        while ($rows = $queryMinMax->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['MaxRental']}" . "</td>
			<td>" . "{$rows['MinRental']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
	    }
	$query1 -> free_result();	

	?>
</body>
</html>