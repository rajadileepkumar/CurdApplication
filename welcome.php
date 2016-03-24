<?php 
	session_start();
	include_once 'db.php';

	if($_POST['login']=='Login') {
		
		$username = $_POST['lFormEmail'];
		$password = $_POST['lFormPassword'];
		


		$password1 = md5($password);

		$sql = 'select * from admin where email="'.$username.'" and password="'.$password.'"';
		$result = mysqli_query($conn,$sql);

		$sql1 = 'select * from registration where email="'.$username.'" and password="'.$password1.'"';
		$result1 = mysqli_query($conn,$sql1);

		while($row = mysqli_fetch_array($result)){
			$adminUserName = $row['email'];
			$adminPassword = $row['password'];
		}

			
		if($username == $adminUserName && $password == $adminPassword){
			$_SESSION['email'] = $username;
			header('Location:admin/adminwelcome');		
		}
		
		else if(mysqli_num_rows($result1) > 0){
			$sql2 = 'select registerstatus from registration where email="'.$username.'" and password="'.$password1.'"';
			$result2 = mysqli_query($conn,$sql2);
			while($row2 = mysqli_fetch_array($result2)){
				$status = $row2['registerstatus'];
			}
			if($status == '1'){
				$_SESSION['login'] = "ok";
				$_SESSION['email'] = $username;
				header('Location:home');
			}
			else{
				header('Location:login?message=Account not activated');
			}
			
		}
		else{
			header('Location:login?message:Username or Password Wrong');
		}
	}

	else{
		header('Location:login?message=Username or Password Wrong');
	}
	
	   
?>

