<?php 
	if(!isset($_SESSION['urol'])) {
		echo "<script>";
		echo "alert('Acceso Denegado!');";
		echo "window.location.replace('index.php');";
		echo "</script>";
	} else {
		if($_SESSION['urol'] == 'cliente') {
			echo "<script>";
			echo "alert('Acceso Denegado!');";
			echo "window.location.replace('index.php');";
			echo "</script>";
		}
	}