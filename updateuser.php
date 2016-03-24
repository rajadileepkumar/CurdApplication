<?php

	session_start();
	include_once 'db.php';
	$userName = $_SESSION['username'];
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}

	$number = $_POST['id'];
	$firstName = $_POST['uname'];
	$lastName = $_POST['ulname'];
	$mobile = $_POST['umobile'];
	$email=$_POST['uemail'];
	$folder="uploads/";

	$fileUpload = $_FILES['formFile']['name'];
	$tmp_file = $_FILES['formFile']['tmp_name'];

	$filePath = $folder .$fileUpload;
	$fileResult = move_uploaded_file($tmp_file, $filePath);
	
	
	//echo "id".$id.'<br/>'."First Name".$firstName.'<br/>'."Last Name".$lastName.'<br/>'."Mobile".$mobile.'<br/>'."Email".$email.'<br/>'."Password".$password1."<br/>"."Conform Password".$conformPassword1."<br/>"."File:".$fileUpload;
	
	$sql1 = 'update registration set firstname = "'.$firstName.'",lastname = "'.$lastName.'",mobile = "'.$mobile.'",email = "'.$email.'",file="'.$filePath.'" where id = "'.$number.'"';
	$result1 = mysqli_query($conn,$sql1);
	if($result1 == 1){
		
		header('Location:home');
	}
	else{
		header('Location:login?message=Unable to update user details');
	}
?>