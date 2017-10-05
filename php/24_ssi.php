<?php 

	include 'ssi/header.inc';
	require 'ssi/menu.inc';

	if($_GET) {
		$url = $_GET['url'];
		include 'ssi/'.$url.".php";
	} else {
		include 'ssi/home.php';
	}

	include 'ssi/footer.inc';

