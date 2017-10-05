<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h1 class="text-center">CRUD (PHP & MYSQL)</h1>
				<h4 class="text-center text-muted text-uppercase">Sistema de Avatars</h4>
				<hr>
				<a href="add.php"
				   class="btn btn-lg btn-success"
				   data-toggle="tooltip"
				   data-placement="top"
				   title="Adicionar Avatar">
					<i class="glyphicon glyphicon-plus"></i>
					Avatar
				</a>
				<hr>
				<?php if (isset($_SESSION['action'])): ?>
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <?php if ($_SESSION['action'] == 'Add'): ?>
							  	<strong>Aviso!</strong> El Avatar se registro correctamente.
							  <?php endif ?>
							  <?php if ($_SESSION['action'] == 'Edit'): ?>
							  	<strong>Aviso!</strong> El Avatar se modifico correctamente.
							  <?php endif ?>
							  <?php if ($_SESSION['action'] == 'Delete'): ?>
							  	<strong>Aviso!</strong> El Avatar se elimino correctamente.
							  <?php endif ?>
							</div>
						</div>
					</div>
					<?php unset($_SESSION['action']); ?>
				<?php endif ?>

				<?php
					include 'includes/db.php';
					$sql = "SELECT * FROM avatars";
					$rs  = mysqli_query($con, $sql);
				?>
				<div class="row">
					<?php while($row = mysqli_fetch_array($rs)) { ?>
						<div class="col-md-3">
							<figure class="avatars" style="background: url(<?=$row['image']?>) no-repeat center; background-size: cover">
								<figcaption><?=$row['name']?></figcaption>
								<nav>
									<a href="show.php?id=<?=$row['id']?>" 
									   class="btn btn-default" 
									   data-toggle="tooltip"
				   					   data-placement="top"
				   					   title="Consultar">
										<i class="glyphicon glyphicon-search"></i>
									</a>
									<a href="edit.php?id=<?=$row['id']?>" 
									   class="btn btn-default" 
									   data-toggle="tooltip"
				   					   data-placement="top"
				   					   title="Editar">
										<i class="glyphicon glyphicon-pencil"></i>
									</a>
									<button class="btn btn-danger btn-delete" 
									        data-toggle="tooltip"
				   					   		data-placement="top"
				   					   		data-id="<?=$row['id']?>" 
				   					   		title="Eliminar">
										<i class="glyphicon glyphicon-trash"></i>
									</button>
								</nav>
							</figure>
						</div>
					<?php } ?>
				</div>

				
			</div>
		</div>
		<footer class="row">
			<div class="col-md-10 col-md-offset-1">
				<hr>
				<p class="text-center">
					Todos los derechos reservados <?=date('Y')?>
				</p>
			</div>
		</footer>
	</div>
	
	
	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
			/* - - - - - - - - - - - - - - - - - - - */
			$('.btn-delete').click(function(event) {
				if (confirm('Realmente desea eliminar este Avatar?')) {
					$id = $(this).attr('data-id');
					window.location.replace('delete.php?id='+$id);
				}
			});
			/* - - - - - - - - - - - - - - - - - - - */

		});
	</script>
</body>
</html>