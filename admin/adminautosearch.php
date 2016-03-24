<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
	if(isset($_GET['term'])){
		$data = "%".$_GET['term']."%";
		$sql = 'select firstname from registration where firstname like "'.$data.'"';
		var_dump($sql);
		exit()
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($result))
		{
			$dataObject[] = $row['firstname'];
		}
		echo json_encode($dataObject);
	}
?>