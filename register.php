<?php 
	include_once('db.php');
	$firstName = $_POST['formFirstName'];
	$lastName = $_POST['formLastName'];
	$mobile = $_POST['formMobile'];
	$email=$_POST['formEmail'];
	$password = $_POST['formPassword'];
	$conformPassword = $_POST['formConformPassword'];
	$password = md5($password);
	$conformPassword = md5($conformPassword);
	$folder="uploads/";
	$fileUpload = $_FILES['formFile']['name'];
	$tmp_file = $_FILES['formFile']['tmp_name'];

	//echo "First Name".$firstName.'<br/>'."Last Name".$lastName.'<br/>'."Mobile".$mobile.'<br/>'."Password".$password."<br/>"."Conform Password".$conformPassword."<br/>"."File:".$fileUpload;
	$filePath = $folder .$fileUpload;
	//echo $filePath;
	$fileResult = move_uploaded_file($tmp_file, $filePath);
	//print_r($fileResult);
	//exit();
	$sql = 'select * from registration where email="'.$email.'" and mobile="'.$mobile.'"';
	
	
	$result = mysqli_query($conn,$sql);
	
	
	$affectedRows = mysqli_num_rows($result);
	
	if($affectedRows > 0){
		header('Location:index?message=Unable To Register');
	}
	else{
		$sql1 = 'insert into registration (firstname,lastname,mobile,email,password,conformpassword,file) values("'.$firstName.'","'.$lastName.'","'.$mobile.'","'.$email.'","'.$password.'","'.$conformPassword.'","'.$filePath.'")';
		//$result1 = mysqli_query($conn,$sql1);
		if(mysqli_query($conn,$sql1)){
			header('Location:login');
		}
		else{
			header('Location:index?Something Went Wrong');
		}
	}
	
	
		
?>