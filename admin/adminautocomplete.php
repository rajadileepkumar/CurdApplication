<?php
	session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
	 
	if(isset($_POST['name'])){
		$data = "%".$_POST['name']."%";
		$sql = 'select firstname from registration where firstname like "'.$data.'"';
		$result = mysqli_query($conn,$sql);
		// while($row = mysqli_fetch_array($result)){
		// 	$dataObject[] = $row['firstname'];
		// 	//echo $dataObject;
		// }
		// return $dataObject;
		if(!empty($result)) {
			echo '<ul id="country-list">';
				foreach($result as $country) {
					echo "<li>";
						echo $country["firstname"];
					echo "</li>";
			 	} 
			echo '</ul>';
		} 
	}
?>

