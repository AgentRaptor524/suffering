<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>movies</title>
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
	if($query1 = $conn->query("SELECT * FROM film ORDER BY  rating ASC,title ASC"))
	{
//		echo "Returned rows are: ". $query1 -> num_rows;
		echo "<br>";
		echo "<table border='1'>";
		echo "<caption>1000 resaults";
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
			echo "</tr>";
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

		//close database connection
		$query1 -> free_result();
	}
	?>
</body>
</html>