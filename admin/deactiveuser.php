<?php 
	session_start();
	$adminUserName = $_SESSION['email'];
	include_once '../db.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$sql = 'update registration set registerstatus = 9 where id="'.$id.'"';
	$result = mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn) > 0){
		header('Location:adminwelcome');
	}
	else{
		header('Location:adminwelcome?Unable to Change the Status');
	}
?>