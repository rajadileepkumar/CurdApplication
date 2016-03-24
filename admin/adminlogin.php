<?php 
	session_start();
	include_once '../db.php';
	$adminUserName = $_POST['aFormEmail'];
	$adminUserPassword = $_POST['aFormPassword'];
	//echo 'User Name:'.$adminUserName.'<br/>'.'Password:'.$adminUserPassword;
	$sql = 'select * from admin where email="'.$adminUserName.'" and password="'.$adminUserPassword.'"';
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		$_SESSION['email'] = $adminUserName;
		header('Location:adminwelcome.php');
	}
	else{
		header('Location:index.php?message=Username or Password Wrong');
	}
?>