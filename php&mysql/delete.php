<?php 
session_start();

if (isset($_GET['id'])) {
	$id = $_GET['id'];

	include 'includes/db.php';

	$sql = "DELETE FROM avatars WHERE id=$id";

	if(mysqli_query($con, $sql)) {
		$_SESSION['action'] = 'Delete';
		echo "<script>window.location.replace('index.php');</script>";
	}

	mysqli_close($con);

}
