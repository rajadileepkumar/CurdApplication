<?php 
	$servername = "localhost";
	$username = "root";
	$password = "aksa123";
	$db = 'apps';

	$conn = mysqli_connect($servername, $username, $password,$db);
	// var_dump($conn);
	// exit();

	if(!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

	//$dbConnection = mysql_select_db($dbName);
?>
