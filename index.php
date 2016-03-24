<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
		.form-control{
			height: auto;
		}
    </style>
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Register Form</h3>
						</div>
						<div class="panel-body">
							<form class="form-group" id="regForm" action="register" method="post" role="form" enctype="multipart/form-data">
								 <fieldset>
								 	<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-name">First Name</label>
										    <input type="text" class="form-control" name="formFirstName" placeholder="First Name" id="formFirstName"/>
										</div>
									</div>
									<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-last-name">Last Name</label>
										    <input type="text" class="form-control" name="formLastName" placeholder="Last Name" id="formLastName"/>
										</div>
									</div>
									
									<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-mobile">Mobile</label>
										    <input type="text" class="form-control" name="formMobile" placeholder="Mobile" id="formMobile"/>
										</div>
									</div>
									<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-email">Email</label>
										    <input type="mail" class="form-control" name="formEmail" placeholder="Email" id="formEmail"/>
										</div>
									</div>
									<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-password">Password</label>
										    <input type="password" class="form-control" name="formPassword" placeholder="Password" id="formPassword"/>
										</div>
									</div>
									<div class="form-group">
										<div class="left-inner-addon">
										    <label class="sr-only" for="form-conform-password">Conform Password</label>
										    <input type="password" class="form-control" name="formConformPassword" placeholder="Conform Password" id="formConformPassword"/>
										</div>
									</div>
									<div class="form-group">
										<div class="left-inner-addon">
											<input type="file" name="formFile" class="form-control" id="formFile">
										</div>
									</div>
	                                <div class="form-group">
										<input type="submit" value="Register" class="btn btn-lg btn-success btn-block" name="login">
									</div>
									<div class="form-group text-center">
										<a href="login">Login</a>
									</div>
								 </fieldset>
							</form>			
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery -->
	    <script src="bower_components/jquery/dist/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="dist/js/sb-admin-2.js"></script>
		<script type="text/javascript" src="script/jquery.validate.min.js"></script>
		<script type="text/javascript" src="script/custom.js"></script>
	</body>
</html>