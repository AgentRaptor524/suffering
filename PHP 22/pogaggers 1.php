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
	if($query1 = $conn->query("SELECT * FROM actor ORDER BY last_name DESC"))
	{
//		echo "Returned rows are: ". $query1 -> num_rows;
		echo "<br>";
			while ($rows = $query1->fetch_assoc())
			{
				echo "{$rows['last_name']} , {$rows['first_name']}";
			
				echo "<br><br>";
			
			}
		//close database connection
		$query1 -> free_result();
	}
	?>
</body>
</html>