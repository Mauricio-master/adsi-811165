<div class="navbar navbar-primary navbar-fixed-top">
		 <div class="navbar-header">
		 	<button class="navbar-toggle collapsed" 
		 			data-toggle="collapse" 
		 			data-target="#bs-example-navbar-collapse-1" 
		 			aria-expanded="false">
		 			<span class="sr-only">Toggle navigation</span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 			<span class="icon-bar"></span>
		 	</button>
		 	<a href="<?=$base_url;?>" class="navbar-brand">Inicio</a>
		 </div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 	<ul class="nav navbar-nav navbar-right">
		 		<li class="active">
		 			<a href="javascript:;" class="text-uppercase"> 
		 				<?=$_SESSION['urol']?> :
		 			</a>
	 			</li>
		 		<li class="dropdown">
			 		<a href="" class="dropdown-toggle" 
			 					data-toggle="dropdown" 
			 					role="button" 
			 					aria-haspopup="true" 
			 					aria-expanded="false">
	 					<i class="material-icons">account_circle</i>
			 			<?=$_SESSION['unombres']?>
			 			<span class="caret"></span>
			 		</a>
		 			<ul class="dropdown-menu">
			 			<li>
			 				<a href="">
			 					<i class="material-icons">person</i> 
			 					Mis Datos
		 					</a>
		 				</li>
						<?php if ($_SESSION['urol'] == 'cliente'): ?>
						<li>
			 				<a href="">
			 					<i class="material-icons">add_shopping_cart</i> 
			 					Carrito de Compras
		 					</a>
		 				</li>
						<li>
			 				<a href="">
			 					<i class="material-icons">shopping_cart</i> 
			 					Mis Compras
		 					</a>
		 				</li>
						<?php endif ?>
			 			<li>
			 				<a href="<?=$base_url?>exit.php">
			 					<i class="material-icons">close</i> 
			 					Cerrar Sesión
		 					</a>
		 				</li>
			 		</ul>
		 		</li>
		 		
		 	</ul>
		 </div>
</div>