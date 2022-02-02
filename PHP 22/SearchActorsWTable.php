<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Example connection to actors</title>
</head>

<body>
	<h1>hello</h1>
	<?php
		$servername="localhost";
		$username="root";
		$password="root";
		$my_db="sakila";
		
	//create connection
		$conn= mysqli_connect($servername,$username,$password,$my_db);
		if($conn->connect_error)
		{
			die("Connections not pog:" . $conn->connect_error);
			
		}
		/*else
			echo "Connection pog";
			run query 
		
		*/
	$searchItem = $_GET['criteria'];
	echo $searchItem;

	$queryString = "SELECT * FROM film where title LIKE '%".$searchItem."%' ORDER BY title asc";
	
	if($query1 = $conn->query($queryString))
	{
 echo "Returned rows are: ". $query1 -> num_rows;
		echo "<br>";
		echo "<table border='1'>";
			echo "<tr>";
				echo "<th>Title</th>";
				echo "<th>Description</th>";
				echo "<th>Release year</th>";
				echo "<th>length</th>";
				echo "<th>Rating</th>";
				echo "<th>Special features</th>";
			echo "</tr>";
			while ($rows = $query1->fetch_assoc())
			{
			
				
			echo "<tr>";

					echo "<td>";
						echo "{$rows['title']}"; 		
					echo "</td>";
				echo "<td>";
						echo "{$rows['description']}"; 		
					echo "</td>";
					echo "<td>";	
						echo "{$rows['release_year']}";
					echo "</td>";
				echo "<td>";
						echo "{$rows['length']}"; 		
					echo "</td>";
					echo "<td>";
						echo "{$rows['rating']}"; 		
					echo "</td>";
					echo "<td>";
						echo "{$rows['special_features']}"; 		
					echo "</td>";
				echo "</tr>";
			
			}
		echo "</table>";
		echo "<p>pog</p>";


		//close database connection
		$query1 -> free_result();
	}
	?>
</body>
</html>