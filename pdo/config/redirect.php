<?php
	if(isset($_SESSION['urol'])) {
		if($_SESSION['urol'] == 'administrador') {
			echo "<script>window.location.replace('administrador.php');</script>";
		} else if($_SESSION['urol'] == 'cliente') {
			echo "<script>window.location.replace('cliente.php');</script>";
		}
	}