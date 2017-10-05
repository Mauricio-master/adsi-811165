<?php 
	session_start();
	unset($_SESSION['uid']);
	unset($_SESSION['unombres']);
	unset($_SESSION['urol']);
	session_destroy();
	echo "<script>window.location.replace('index.php');</script>";