<?php
	session_start();
	$adminUserName = $_SESSION['email'];
	include_once '../db.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	$sql = 'delete from registration where id="'.$id.'"';
	
	$result = mysqli_query($conn,$sql);
	if($result){
		header('Location:adminwelcome');
	}
	else{
		header('Location:adminwelcome?message=Unable to delete');
	}
?>