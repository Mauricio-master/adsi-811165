<?php
	// Conectar Base de Datos
	try {
		$con = new PDO("mysql:host=$host;dbname=$ndb",$user,$pass);
		$con->exec('set names utf8');
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Se ha conectado a la base de datos";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}

	// Login
	function login($con, $correo, $clave) {
		try {
			$sql = "SELECT *
					FROM usuarios
					WHERE correo = :correo
					AND clave = :clave
					LIMIT 1";
			$stm = $con->prepare($sql);
			$stm->bindparam(':correo', $correo);
			$stm->bindparam(':clave', $clave);
			$stm->execute();
			if($stm->rowCount() > 0) {
				$urow = $stm->fetch(PDO::FETCH_ASSOC);
				$_SESSION['uid']      = $urow['id'];
				$_SESSION['unombres'] =  $urow['nombres'];
				$_SESSION['urol']     =  $urow['rol'];
				return true;
			} else {
				return false;
			}	
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	// Obtener todos los articulos
	function showArticles($con) {
		try {
			$stm = $con->prepare("SELECT * FROM articulos");
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	// Guardar Articulo
	function saveArticle($con, $nombre, $precio, $imagen = 'default') {
		try {
			if($imagen == 'default') {
				$sql = "INSERT INTO articulos VALUES (DEFAULT, :nombre, :precio, DEFAULT)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
			} else {
				$sql = "INSERT INTO articulos VALUES (DEFAULT, :nombre, :precio, :imagen)";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
			}
			if($stm->execute()) {
				$_SESSION['message_action'] = 'El Artículo se Adicionó con Exito!';
				echo "<script>window.location.replace('./');</script>";
			} else {
				echo "<script>window.location.replace('./');</script>";
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	// Consultar un Articulo
	function showArticle($con, $id) {
		try {
			$stm = $con->prepare("SELECT * FROM articulos WHERE id = :id");
			$stm->bindparam(':id', $id);
			$stm->execute();
			return $stm->fetchAll();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	// Modificar Articulo
	function updateArticle($con, $id, $nombre, $precio, $imagen = 'default') {
		try {
			if($imagen == 'default') {
				$sql = "UPDATE articulos SET nombre = :nombre, precio = :precio WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':id', $id);
			} else {
				$sql = "UPDATE articulos SET nombre = :nombre, precio = :precio, imagen = :imagen WHERE id = :id";
				$stm = $con->prepare($sql);
				$stm->bindparam(':nombre', $nombre);
				$stm->bindparam(':precio', $precio);
				$stm->bindparam(':imagen', $imagen);
				$stm->bindparam(':id', $id);
			}
			if($stm->execute()) {
				$_SESSION['message_action'] = 'El Artículo se Modificó con Exito!';
				echo "<script>window.location.replace('./');</script>";
			} else {
				echo "<script>window.location.replace('./');</script>";
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

		// Eliminar Articulo
		function deleteArticle($con, $id) {
			try {
				$stm = $con->prepare("DELETE FROM articulos WHERE id = :id");
				$stm->bindparam(':id', $id);
				if($stm->execute()) {
					$_SESSION['message_action'] = 'El Artículo se Eliminó con Exito!';
					echo "<script>window.location.replace('./');</script>";
				}
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
