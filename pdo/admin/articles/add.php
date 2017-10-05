<?php 
	require '../../config/app.php'; 
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../templates/header.inc';
	include '../../templates/navbar.inc';
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<ol class="breadcrumb">
            <li><a href="../../">Menú Principal</a></li>
            <li><a href="./">Módulo Artículos</a></li>
            <li class="active">Adicionar Artículo</li>
        </ol>
		<h4 class="text-uppercase">Adicionar Artículo</h4>
		<hr>
		<form action="" id="frm" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" 
					   class="form-control" 
					   name="nombre" 
					   data-validation="required"
					   placeholder="Nombre">
			</div>
			<div class="form-group">
				<input type="number" 
					   class="form-control" 
					   name="precio" 
					   data-validation="number"
					   placeholder="Precio">
			</div>
			<div class="form-group">
				<input type="file" id="upload" class="hide" name="imagen" accept="image/*">
				<button class="btn btn-primary btn-upload" type="button">
					<i class="material-icons">photo</i> Subir Imagen
				</button>
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit">
					<i class="material-icons">send</i> Adicionar
				</button>
				<button class="btn btn-default" type="reset">
					<i class="material-icons">clear</i> Limpiar
				</button>
			</div>
		</form>
		<?php 
		if($_FILES) {
			$nombre = $_POST['nombre'];
			$precio = $_POST['precio'];
			$imagen = 'public/imgs/articles/'.$_FILES['imagen']['name'];
			if(!empty($_FILES['imagen']['name'])) {
                move_uploaded_file($_FILES['imagen']['tmp_name'], '../../'.$imagen);
                saveArticle($con, $nombre, $precio, $imagen);
            } else {
                saveArticle($con, $nombre, $precio);
            }
		}
		?>
		</div>
	</div>
</div>
<?php 
	include '../../templates/footer.inc';
?>