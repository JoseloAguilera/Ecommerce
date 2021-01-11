<?php 
	session_start();
	if (!isset($_SESSION['logueado'])) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SESSION['empresa'];?> | Cad. Clientes Revendedores</title>
	<?php include 'includes/head.php'; ?>
</head>
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<!-- MAIN HEADER -->
		<?php include 'includes/header.php'; ?>
		<!-- MAIN HEADER END -->

		<!-- ASIDE BAR -->
		<?php include 'includes/aside.php'; ?>
		<!-- ASIDE BAR END -->

		<?php include_once "mods/objs/revendedor.php";?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Cabicera de Contenido (Título) -->
			<section class="content-header">
				<h1>
                Revendedores
					<small>Registro de los revendedores.</small>
				</h1>
			</section>

			<!-- Contenido Principal -->
			<section class="content">
				<div class="box">
					<div class="box-header with-border">
						<!-- Botón para crear más cursos -->
						<div class="col-md-3 pull-left">
							<button id="btnAdd" type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddModal" style="margin-bottom: 5px;">+ Nuevo</button>
						</div>
					</div>
					<div class="modal fade modal-mensaje" id="modal-mensaje" tabindex="-1" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header modal-mensaje-<?php echo $tipomensaje;?>" > <!-- modal-mensaje-success or modal-mensaje-error -->
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h1 class="modal-title text-center">
										<?php if ($tipomensaje == 'success') {?>
											<img src="img/success-icon.png"> 
										<?php } else { ?>
											<img src="img/error-icon.png">
										<?php }?>
									</h1>
								</div>
								<div class="modal-body text-center">
									<p>  <?php echo $mensaje; ?></p>
								</div>
							</div>
						</div>
					</div>
					<!-- Corpo de Caja -->
					<div class="box-body">
						<div class="box-body table-responsive">
							<table class="table table-striped table-bordered display nowra" id="tabladatos">
							<thead>
								<tr>
									<th>Logo</th>
									<th>Nombre</th>
									<th>Dirección</th>
									<th>Telefono</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
                                <?php 
									if ($clientes != null) { 
										foreach ($clientes as $row) {											
								?>
								<tr data-toggle="modal" data-target="#AltModal" data-codigo="<?php echo $row['id'];?>" data-nombre="<?php echo $row['nombre'];?>" data-direccion="<?php echo $row['direccion'];?>" data-telefono="<?php echo $row['telefono'];?>" data-email="<?php echo $row['email'];?>" data-url="<?php echo $row['url'];?>">
									<td><img src="../img/revendedores/<?php echo $row['url'];?>" class="img-fluid img-thumbnail" alt="revendedor" style="max-width: 150px;"><td>
									<td><?php echo $row['nombre']?></td>
									<td><?php echo $row['direccion'];?></td>
									<td><?php echo $row['telefono'];?></td>
									<td><?php echo $row['email'];?></td>
								</tr>
								<?php }}?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.Caja de Texto de color gris (Default) -->

				<!-- AddModal -->
				<div class="modal fade" tabindex="-1" role="dialog" id="AddModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Nuevo Revendedor</h4>
							</div>
							<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
								<div class="modal-body">
									
									<div class="row text-center">
										<div class="col-md-3"></div>
										<div class="col-md-6 text-center">
											<img src="../img/revendedores/no-image.png" class="img-fluid img-thumbnail" style="width: 250px; height: 250px;" alt="no-image" id="img-alt">
										</div>
										<div class="col-md-3"></div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="fileToUpload"></label>
											<input type="file"  name="fileToUpload" id="fileToUpload">
										</div>
									</div>
									<div class="row">
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="nombre">Nombre</label>
												<input type="text" class="form-control" id="nombre" name="nombre" value="" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="nombre">Teléfono</label>
												<input type="text" class="form-control" id="telefono" value="" >
											</div>
										</div>
										
									</div>
			
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="nombre">Dirección</label>
												<input type="text" class="form-control" id="direccion" value="" >
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="nombre">Correo</label>
												<input type="text" class="form-control" id="email" value="" >
											</div>
										</div>
										
									</div>
									
									
								</div> <!-- modal-body -->
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									<button type="submit" class="btn btn-primary" name="nuevo">Guardar</button>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- ./AddModal -->	

				<!-- AltModal -->
				<div class="modal fade" tabindex="-1" role="dialog" id="AltModal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Revendedor</h4>
							</div>
							<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
								<div class="modal-body">
									<input type="hidden" class="form-control" id="codigo" name="codigo" required>
									<input type="hidden" class="form-control" id="imgurl" name="imgurl" required>
									<div class="row text-center">
										<div class="col-md-3"></div>
										<div class="col-md-6 text-center">
											<img src="../img/revendedores/no-image.png" class="img-fluid img-thumbnail" style="width: 250px; height: 250px;" alt="no-image" id="img-alt">
										</div>
										<div class="col-md-3"></div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label for="fileToUpload"></label>
											<input type="file"  name="fileToUpload" id="fileToUpload">
										</div>
									</div>
									<div class="row">
										
										<div class="col-md-6">
											<div class="form-group">
												<label for="nombre">Nombre</label>
												<input type="text" class="form-control" id="nombre" name="nombre" value="" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="nombre">Teléfono</label>
												<input type="text" class="form-control" id="telefono" value="" >
											</div>
										</div>
										
									</div>
			
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="nombre">Dirección</label>
												<input type="text" class="form-control" id="direccion" value="" >
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="nombre">Correo</label>
												<input type="text" class="form-control" id="email" value="" >
											</div>
										</div>
										
									</div>
								</div> <!-- modal-body -->
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
									<button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
								</div>
							</form>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- ./AltModal -->	
			</section>
		</div> <!-- /.content-wrapper -->

		<!-- FOOTER -->
		<?php include "includes/footer.php"; ?>
		<!-- ./FOOTER -->
	</div>
	<!-- ./Contenido -->

	<!-- SCRIPTS (js) -->
	<script type="text/javascript">
		<?php include_once "mods/js/revendedor.js"; ?>
	</script>
	<?php include "includes/scripts.php"; ?>
	<!-- ./SCRIPTS (js) -->
</body>
</html>