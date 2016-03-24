<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
?>
<!DOCtype html>
<html ng-app lang="fr">
	<head lang="fr">
		<meta charset="UTF-8">
		<title>Angular App</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<a href="#" class="navbar-brand" title="Logo">
							<img src="" alt="Logo">
						</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-only"></span>
							<span class="icon-only"></span>
							<span class="icon-only"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="login.php">Login</a></li>
							<li><a href="register.php">Register</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="pull-right">
				<a href="adminlogout.php"><span class="glyphicon glyphicon-log-out"></span></a>
			</div>
			<table class="table table-bordered">
				<tr>
					<td>Id</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Mobile</td>
					<td>Email</td>
					<td>Password</td>
					<td>Conform Password</td>
					<td>Status</td>
					<td>Action</td>
				</tr>
				
					<?php 
						$sql = 'select * from registration';
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($result)){
							echo '<tr>';
								echo '<td>'.$row['id'].'</td>';
								echo '<td>'.$row['firstname'].'</td>';
								echo '<td>'.$row['lastname'].'</td>';
								echo '<td>'.$row['mobile'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['password'].'</td>';
								echo '<td>'.$row['conformpassword'].'</td>';
								echo "<img border=\"0\" src=\"".$row['file']."\" width=\"102\" alt=\"Your Name\" height=\"91\">";
								$active = $row['registerstatus'];
								//echo $active;
								if($active=='9'){
									echo '<td>';
										echo '<a href="activestatususer.php?id='.$row['id'].'"><span class="glyphicon glyphicon-unchecked"></span></a>';
									echo '</td>';	
								}
								else if($active=='1'){
									echo '<td>';
										echo '<a href="deactiveuser.php?id='.$row['id'].'"><span class="glyphicon glyphicon-check"></span></a>';
									echo '</td>';
								}
								echo '<td>';
									echo '<a href="deleteuser.php?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a>';
								echo '</td>';
							echo '</tr>';
						}
					?>
				
			</table>
		</div>
		<script type="text/javascript" src="../script/jquery.min.js"></script>
		<script type="text/javascript" src="../script/angular.min.js"></script>	
		<script type="text/javascript" src="../script/bootstrap.js"></script>
	</body>
</html>