<?php 
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
	if(isset($_GET['name'])){
		$data = "%".$_GET['name']."%";
		$limit = 5;  
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
		$start_from = ($page-1) * $limit; 
		$sql = 'select * from registration where firstname like "'.$data.'" order by id desc limit '.$start_from.','.$limit.'';
		$result = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($result);
		echo '<h6>'.'Number Of Records:'.$num_rows.'</h6>';
		if($num_rows > 0){
			?>

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
				while($row=mysqli_fetch_array($result)){
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
				echo '</table>';
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
		}
		else{
			echo 'No Recoard Found';
		}

		
	}
?>