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
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <link rel="stylesheet" type="text/css" href="../css/datepicker.css">
	    <style type="text/css">
			.pagination.pagination-sm a:hover{
				background: #000;
				color: #fff;
			}

			.pagination.pagination-sm a:active{
				background: #000;
				color: #fff;
			}

			.search1{
				float: right;
				position: relative;
				top: -22px;
				right: 13px;
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
	               
	            </div>
	            <div class="">
	            		<div class="pull-left">
	            			<div class='input-group date' id='datetimepicker1'>
			                    <input type='text' class="form-control" />
			                    <span class="input-group-addon">
			                        <span class="glyphicon glyphicon-calendar"></span>
			                    </span>
			                </div>

	            		</div>
	            		<div class="pull-right">
	            			<div class="right-inner-addon ">
							    <input type="text" class="form-control" placeholder="Search" name="search" id="search"/>
							    <i class="fa fa-search fa-fw search1"></i>
							    <div id="search-box">
							    </div>
							</div>
	            		</div>
	            		<div id="ex">
	            		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
							<tr>
								<td>Id</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Mobile</td>
								<td>Email</td>
								<td>Status</td>
								<td>Action</td>
								<td>Profile</td>
							</tr>
							
								<?php 
									$limit = 5;  
									if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
									$start_from = ($page-1) * $limit; 
									$sql = 'select * from registration order by id desc limit '.$start_from.','.$limit.'';
									$result = mysqli_query($conn,$sql);
									while($row = mysqli_fetch_array($result)){
										echo '<tr>';
											echo '<td>'.$row['id'].'</td>';
											echo '<td>'.$row['firstname'].'</td>';
											echo '<td>'.$row['lastname'].'</td>';
											echo '<td>'.$row['mobile'].'</td>';
											echo '<td>'.$row['email'].'</td>';
											$active = $row['registerstatus'];
											$file = $row['file'];
											//echo $active;
											if($active=='9'){
												echo '<td>';
													echo '<a href="activestatususer?id='.$row['id'].'"><span class="glyphicon glyphicon-unchecked"></span></a>';
												echo '</td>';	
											}
											else if($active=='1'){
												echo '<td>';
													echo '<a href="deactiveuser?id='.$row['id'].'"><span class="glyphicon glyphicon-check"></span></a>';
												echo '</td>';
											}
											echo '<td>';
												echo '<a href="deleteuser?id='.$row['id'].'"><span class="glyphicon glyphicon-trash"></span></a>';
											echo '</td>';
											echo '<td>';
												?>
													<img src="../<?php echo $file ?>">
												<?php
											echo '</td>';
										echo '</tr>';
									}
								?>
							
						</table>
						<?php 
							$sql1 = "SELECT COUNT(id) FROM registration";  
							$rs_result = mysqli_query($conn,$sql1);;  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<ul class='pagination pagination-sm'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
							             $pagLink .= "<li><a href='adminview?page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul>"; 
						?>																																																																																																																																																																											
	            	</div>
	            	<div class="ex" style="display:none;">No Data Found</div>
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
	    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	    <script type="text/javascript" src="../script/bootstrap-datepicker.js"></script>

	    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
 
		<!-- Include Date Range Picker -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

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
	    
	    <script type="text/javascript">
	    	$('.search1').click(function(){
	    		$.ajax({
	    			url:'adminsearch',
	    			type:'get',
	    			data:{name:$('input#search').val()},
	    			success:function(response){
	    				$('#ex').html(response);
	    			},
	    		})
	    	});
	    </script>
	    <script type="text/javascript">
			// $("#search").keyup(function(){
			// 	$.ajax({
			// 		type: "POST",
			// 		url: "adminautocomplete",
			// 		data:{name:$('input#search').val()},
			// 		success:function(response){
			// 			//alert(response);
		 //    			$('#search-box').html(response);
	  //   			},
			// 	});
			// });
			// $('#search-box').autocomplete();

			$( "#search" ).autocomplete({
			    source: 'search'
			});

			
            $(function () {
                $('#datetimepicker1').daterangepicker();
            });
        
	    </script>
	</body>
</html>
