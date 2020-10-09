<?php 
	session_start();
	if (!isset($_SESSION['logueado'])) {
		header('Location: ../login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_SESSION['empresa'];?> | Cad. Productos</title>
	<?php include 'includes/head.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- MAIN HEADER -->
		<?php include 'includes/header.php'; ?>
		<!-- MAIN HEADER END -->

		<!-- ASIDE BAR -->
		<?php include 'includes/aside.php'; ?>
		<!-- ASIDE BAR END -->

		<?php include_once "mods/objs/producto.php";?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Cabicera de Contenido (Título) -->
			<section class="content-header">
				<h1>
					Productos
					<small>Registro de los productos.</small>
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
									<th>Referencia</th>
									<th>Categoría</th>
									<th>Marca</th>
									<th>Nombre</th>
									<th>Minorista</th>
									<th>Mayorista</th>
									<th>Destaque</th>
									<th>Activo</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$_SESSION['prod_tab'] = "detalles";
									if ($productos != null) { 
										foreach ($productos as $row) {
								?>
								<tr onclick="window.location.href = 'producto_detalle.php?producto=<?php echo $row['id'];?>';">
									<td><?php echo $row['referencia'];?></td>
									<td>
									<?php
										$categoriasprod = getProdCategorias($row['id']);
										foreach ($categoriasprod as $categoria) {
											echo '<b>'.$categoria['nombre'].'</b><br>';
											$subcategoriasprod = getProdSubCategorias($categoria['id'], $row['id']);
											if ($subcategoriasprod != null) { 
												foreach ($subcategoriasprod as $subcategoria) {
													echo '<i class="fa fa-caret-right"></i> '.$subcategoria['nombre'].'<br>';
												}
											}
										}
									?>
									</td>
									<td><?php echo $row['marca'];?></td>
									<td><?php echo $row['nombre'];?></td>
									<td>
									<?php
										$minorista = "";
										if ($row['valor_minorista'] > 0) {
											$minorista = number_format($row['valor_minorista'], 0, ',', '.')." gs";
										} else {
											$minorista = "Sob consulta ";
										}
										echo $minorista;
									?>
									</td>
									<td>
									<?php
										$mayorista = "";
										if ($row['valor_mayorista'] > 0) {
											$mayorista = number_format($row['valor_mayorista'], 0, ',', '.')." gs";
										} else {
											$mayorista = "Sob consulta ";
										}
										echo $mayorista;
									?>
									</td>
									<td>
									<?php
										$circle_color = "";
										if ($row['destaque'] == 1) {
											echo '<span style="color: white">S</span><i class="fa fa-star text-warning"></i>';
										} else {
											echo '<span style="color: white">N</span><i class="fa fa-minus text-muted"></i>';
										}
									?>
									</td>
									<td>
									<?php
										$circle_color = "";
										if ($row['activo'] == 1) {
											echo '<span style="color: white">S</span><i class="fa fa-check text-success"></i>';
										} else {
											echo '<span style="color: white">N</span><i class="fa fa-close text-danger"></i>';
										}
									?>
									</td>
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
								<h4 class="modal-title">Nuevo Producto</h4>
							</div>
							<form action="" method="POST" autocomplete="off">
								<div class="modal-body">
									<div class="row">
										<div class="col-md-5">
											<div class="form-group">
												<label for="nombre">Referencia</label>
												<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" maxlength="20">
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<label for="tipo">Categoría</label>
												<select class="selectpicker show-tick" id="categoria" name="categoria" data-width="100%" data-live-search="true">
													<?php
														if ($categorias != null) {
															foreach ($categorias as $row) {	
																if ($row['activo'] == 1) {
													?>
														<option value="<?php echo $row['id'];?>" style="font-weight: bold !important;"><?php echo $row['nombre'];?></option> 
														<?php
															 $subcategorias = getSubCategorias ($row['id']);
															if ($subcategorias != null) {
																foreach ($subcategorias as $linea) {
																	if ($linea['activo'] == 1) {
														?>
														<option value="<?php echo $linea['id'];?>"><?php echo $linea['nombre'];?></option> 
													<?php 
																			}//END IF SUB ACTIVOS
																		}//END FOREACH SUB
																	}//END IF SUB
																} //END IF ACTIVOS
															} //END FOREACH
														} //END IF
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-8">
											<div class="form-group">
												<label for="nombre">Nombre</label>
												<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Producto" maxlength="80" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="tipo">Marca</label>
												<select class="selectpicker" id="marca" name="marca" data-width="100%" data-live-search="true">
													<?php
														if ($marcas != null) {
															foreach ($marcas as $row) {	
																if ($row['activo'] == 1) {
													?>
														<option value="<?php echo $row['id'];?>"><?php echo $row['nombre'];?></option> 
													<?php 
																} //END IF
															} //END FOREACH
														} //END IF
													?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label for="nombre">Estoque</label>
												<input type="text" class="form-control" id="estoque" name="estoque" placeholder="0" onKeyUp="formatoNro(this, event)" maxlength="5" required>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="nombre">Precio al Contado</label>
												<input type="text" class="form-control" id="precio" name="precio" placeholder="999.999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="20">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="nombre">Cuotas</label>
												<input type="text" class="form-control" id="cuota" name="cuota" placeholder="99" onKeyUp="formatoNro(this, event)" maxlength="5">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="nombre">Precio</label>
												<input type="text" class="form-control" id="valor" name="valor" placeholder="999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="15">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="descripcion">Destacado</label>
												<div class="row">
													<div class="col-md-12">
														<input type="checkbox" name="destacado" id="toggle" data-toggle="toggle" data-on="Sí" data-off="No" data-onstyle="success" data-offstyle="warning" data-width="115" data-height="35">
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="nombre">Al Contado Mayorista</label>
												<input type="text" class="form-control" id="precio" name="precio_mayorista" placeholder="999.999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="20">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<label for="nombre">Cuotas</label>
												<input type="text" class="form-control" id="cuota" name="cuota_mayorista" placeholder="99" onKeyUp="formatoNro(this, event)" maxlength="5">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<label for="nombre">Precio Mayorista</label>
												<input type="text" class="form-control" id="valor" name="valor_mayorista" placeholder="999.999.999" onKeyUp="formatoMoneda(this, event)" maxlength="15">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="descripcion">Descripción</label>
												<textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Descripción del Producto" maxlength="1000"></textarea>
											</div>
										</div>
									</div> <!-- row -->
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
			</section>
		</div> <!-- /.content-wrapper -->

		<!-- FOOTER -->
		<?php include "includes/footer.php"; ?>
		<!-- ./FOOTER -->
	</div>
	<!-- ./Contenido -->

	<!-- SCRIPTS (js) -->
	<script type="text/javascript">
		<?php include_once "mods/js/producto.js"; ?>
	</script>
	<?php include "includes/scripts.php"; ?>
	<!-- ./SCRIPTS (js) -->
</body>
</html>