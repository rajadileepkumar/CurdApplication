<?php
	session_start(); 
	include_once 'db.php';
	if($_SESSION['login']!='ok'){
		header('Location:login');
		exit();
	}
	
	$userName = $_SESSION['email'];
	//echo $userName;


	$sql = 'select id,firstname,lastname,mobile,email,password,conformpassword,file from registration where email="'.$userName.'"';
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$id = $row['id'];
		$firstName = $row['firstname'];
		$lastName = $row['lastname'];
		$Mobile = $row['mobile'];
		$Email = $row['email'];
		$file = $row['file'];
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
	    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	    <!-- MetisMenu CSS -->
	    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	    <!-- Timeline CSS -->
	    <link href="dist/css/timeline.css" rel="stylesheet">

	    <!-- Custom CSS -->
	    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

	    <!-- Morris Charts CSS -->
	    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
	                <a class="navbar-brand" href="home"><img src="<?php echo $file;?>" class="img-responsive img-circle"></a>
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
	                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
	                            <a href="home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
	                        </li>
	                        <li>
	                            <?php 
	                            	echo '<a href="edituser?id='.$id.'"><i class="fa fa-pencil-square-o fa-fw"></i> Edit</a>';
	                            ?>
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
            	<div class="">
            		<div class="">
            			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<tr>
								<td>Id</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Mobile</td>
								<td>Email</td>
								<td>Profile</td>
							</tr>
							<tr>
								<td><?php echo $id;?></td>
								<td><?php echo $firstName;?></td>
								<td><?php echo $lastName;?></td>
								<td><?php echo $Mobile;?></td>
								<td><?php echo $Email;?></td>
								<td><img src="<?php echo $file; ?>"></td>
							</tr>
            			</table>
            		</div>
            	</div>
        	</div>
		</div>

		<script src="bower_components/jquery/dist/jquery.min.js"></script>

	    <!-- Bootstrap Core JavaScript -->
	    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	    <!-- Metis Menu Plugin JavaScript -->
	    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

	    <!-- Morris Charts JavaScript -->
	    <script src="bower_components/raphael/raphael-min.js"></script>
	    <script src="bower_components/morrisjs/morris.min.js"></script>
	    <script src="script/morris-data.js"></script>

	    <!-- Custom Theme JavaScript -->
	    <script src="dist/js/sb-admin-2.js"></script>
	    <script type="text/javascript">
	    	$(document).ready(function() {
			    $('#example').DataTable({
			    	responsive: true
			    });
			} );
	    </script>
	    
	</body>
</html>