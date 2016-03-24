<?php 

?>
<!DOCtype html>
<html ng-app lang="fr">
	<head lang="fr">
		<meta charset="UTF-8">
		<title>Angular App</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
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
							<li class="active"><a href="login.php" class="active">Login</a></li>
							<li><a href="index.php">Registration</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="container">
			<div class="col-md-6 col-md-offset-6">
				<h4>Login Form</h4>
				<form class="form-group" id="aloginForm" action="adminlogin.php" method="post">
					<div class="form-group">
						<div class="left-inner-addon">
							<label class="sr-only" for="form-login">Email</label>
							<input type="email" class="form-control" name="aFormEmail" placeholder="Email" id="aFormEmail">
						</div>
					</div>
					<div class="form-group">
						<div class="left-inner-addon">
							<label for="form-password" class="sr-only">Password</label>
							<input type="password" class="form-control" name="aFormPassword" placeholder="Password" id="aFormPassword">
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>	
			</div>
		</div>
	<body>
		<script type="text/javascript" src="../script/jquery.min.js"></script>
		<script type="text/javascript" src="../script/angular.min.js"></script>	
		<script type="text/javascript" src="../script/bootstrap.js"></script>
		<script type="text/javascript" src="../script/jquery.validate.min.js"></script>
		<script type="text/javascript" src="../script/custom.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>