<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
	echo $adminUserName;
	$firstName = $_POST['adminfName'];
	$adminLName = $_POST['admilName'];
	$adminEmail = $_POST['adminemail'];
	$adminMobile = $_POST['adminmobile'];
	$fileUpload = $_FILES['adminFile']['name'];
	$tmp_file = $_FILES['adminFile']['tmp_name'];
	$folder = "../uploads/";


	echo $adminLName;
	
	$filePath = $folder .$fileUpload;
	$fileResult = move_uploaded_file($tmp_file, $filePath);
	$sql = 'update admin set firstname="'.$firstName.'",lastname="'.$adminLName.'",email="'.$adminEmail.'",mobile="'.$adminMobile.'",file="'.$filePath.'" where email="'.$adminUserName.'"';
	$result = mysqli_query($conn,$sql);
	if($result == 1){
		header('Location:adminwelcome');
	}
	else{
		header('Location:adminwelcome?message=Unable to Update admindetails');
	}
?>