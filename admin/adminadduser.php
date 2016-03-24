<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
?>
<!DOCtype html>
<html>
	<head lang="fr">
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>SB Admin 2 - Bootstrap Admin Theme</title>
	    <!-- Bootstrap Core CSS -->
	    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	    <!-- Timeline CSS -->
	    <link href="../dist/css/timeline.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <style type="text/css">
			.huge{
				font-size: 14px;
			}
	    </style>
	</head>
	<body>
		<div id="wrapper">
			<!-- Navigation -->
	        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="adminwelcome"><?php echo $adminUserName;?></a>
	            </div>
	            <!-- /.navbar-header -->

	            <ul class="nav navbar-top-links navbar-right">
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
	                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
	                    </a>
	                    <ul class="dropdown-menu dropdown-user">
	                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
	                        </li>
	                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
	                        </li>
	                        <li class="divider"></li>
	                        <li><a href="adminlogout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
	                        </li>
	                    </ul>
	                    <!-- /.dropdown-user -->
	                </li>
	                <!-- /.dropdown -->
	            </ul>
	            <!-- /.navbar-top-links -->

	            <div class="navbar-default sidebar" role="navigation">
	                <div class="sidebar-nav navbar-collapse">
	                    <ul class="nav" id="side-menu">
	                        <li>
	                            <a href="adminwelcome"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	                        </li>
	                        <li>
	                            <a href="adminadduser"><i class="fa fa fa-plus fa-fw"></i> Add</a>
	                        </li>
	                        <li>
	                            <a href="adminview"><i class="fa fa fa-eye fa-fw"></i> View</a>
	                        </li>
	                        <li>
	                            <a href="adminedit"><i class="fa fa fa-pencil-square-o fa-fw"></i> Edit</a>
	                        </li>
	                    </ul>
	                </div>
	                <!-- /.sidebar-collapse -->
	            </div>
	            <!-- /.navbar-static-side -->
	        </nav>
			
			<div id="page-wrapper">
	            <div class="row">
	                <div class="col-lg-12">
	                    <h1 class="page-header">Dashboard</h1>
	                </div>
	                <!-- /.col-lg-12 -->
	            </div>
            	<!-- /.row -->
	            <div class="row">
	            	<div class="col-md-6">
				<h4>Registration Form</h4>
				<form class="form-group" id="regForm" method="post" action="../register">
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
						<input type="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
				<div>
					<?php 
						$errorMssg = $_GET['message'];
						if($errorMssg){
							echo $errorMssg;
						}
					?>
				</div>
			</div>
	            </div>
        	</div>
		</div>

		<script src="../bower_components/jquery/dist/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <script src="../bower_components/raphael/raphael-min.js"></script>
	    <script src="../bower_components/morrisjs/morris.min.js"></script>
	    <script src="../script/morris-data.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="../dist/js/sb-admin-2.js"></script>
	    <script type="text/javascript" src="../script/jquery.validate.min.js"></script>
	    <script type="text/javascript" src="../script/custom.js"></script>
	    
	</body>
</html>