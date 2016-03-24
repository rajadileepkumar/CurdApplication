<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
	$sql = 'select firstname,lastname,email,mobile from admin where email="'.$adminUserName.'"';
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$adminfirstName = $row['firstname'];
		$adminlastName = $row['lastname'];
		$adminEmail = $row['email'];
		$adminMobile = $row['mobile'];

	}
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
			.pagination.pagination-sm a:hover{
				background: #000;
				color: #fff;
			}

			.pagination.pagination-sm a:active{
				background: #000;
				color: #fff;
			}
			.form-control{
				height: auto;
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
	                        <li><a href="adminlogout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
	            </div>
	            <div class="row">
	            	<div class="col-md-6">
	            		<h4>Update Admin Details</h4>
	            		<form class="form-group" id="regForm" method="post" action="adminupdateuser" enctype="multipart/form-data">
	    					<div class="form-group">
	    						<div class="left-inner-addon">
	    							<input type="text" name="adminfName" class="form-control" id="adminfName" value="<?php echo $adminfirstName; ?>">
	    						</div>
	    					</div>
	    					<div class="form-group">
	    						<div class="left-inner-addon">
	    							<input type="text" name="admilName" id="adminlName" class="form-control" value="<?php echo $adminlastName; ?>">
	    						</div>
	    					</div>
	    					<div class="form-group">
	    						<div class="left-inner-addon">
	    							<input type="text" name="adminemail" id="adminemail" class="form-control" value="<?php echo $adminEmail; ?>">
	    						</div>
	    					</div>
	    					<div class="form-group">
	    						<div class="left-inner-addon">
	    							<input type="text" name="adminmobile" id="adminmobile" class="form-control" value="<?php echo $adminMobile;?>">
	    						</div>
	    					</div>
	    					<div class="form-group">
	    						<div class="left-inner-addon">
	    							<input type="file" name="adminFile" id="adminFile" class="form-control">
	    						</div>
	    					</div>
	    					<div class="form-group">
	    						<input type="submit" value="Update" class="btn btn-primary">
	    					</div>
	            		</form>
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
	    <script type="text/javascript">
	    	$(document).ready(function() {
			    $('#example').DataTable({
			    	responsive: true
			    });
			} );
	    </script>
	    <style type="text/css">
			table.dataTable th,
			table.dataTable td {
			        white-space: nowrap;
			}
	    </style>
	</body>
</html>