<?php
session_start();
	$adminUserName=$_SESSION['email'];
	include_once '../db.php';
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = "SELECT * FROM registration WHERE firstname LIKE '%".$searchTerm."%' ORDER BY firstname ASC";
$result = mysqli_query($conn,$query);
while ($row = $result->fetch_assoc()) {
    $data[] = $row['firstname'];
}
//return json data
echo json_encode($data);
?>