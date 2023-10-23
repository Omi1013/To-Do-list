<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$server_name = "localhost";
	$username = "root";
	$password = "";
	$database_name = "todos";

	$conn = mysqli_connect($server_name, $username, $password, $database_name);
	//now check the connection
	if (!$conn) {
		die("Connection Failed:" . mysqli_connect_error());

	}

	if (isset($_POST['add'])) {
		$first_name = $_POST['title'];

		$sql_query = "INSERT INTO todos(Title)
	 VALUES (' $first_name')";

		if (mysqli_query($conn, $sql_query)) 
		{
			include('index.php');
		} 
		else {
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	?>
</body>

</html>