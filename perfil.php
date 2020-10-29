<?php 
	session_start();

	if (!isset($_SESSION['usuario'])) {
		header('Location: ingresar.php');
	}
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	// session_start();
	include("includes/head.php");
	include("includes/funciones.php");
    include("includes/cart.php");
	
	$cliente = getCliente($_SESSION['id_cliente']);
	$direccion = getDireccion($_SESSION['id_cliente']);

	$departs = getDepartamentos();
	
    if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['guardar'])){
			$ruc = preg_replace('/\D/', '', $_POST['ruc']);
			$guardar = saveCliente ($_SESSION['id_cliente'], $_POST['nombre'], $_POST['apellido'], $_POST['tipo'], $ruc, $_POST['razonsocial'], $_POST['telefono'], $_POST['email'], $_POST['departamento'], $_POST['ciudad'], $_POST['calle'], $_POST['referencias']);

			if ($guardar == $_SESSION['id_cliente']) {
				$tipomensaje = 'success';
				$mensaje= '<p class="text-center alert alert-success">Los datos fueron actualizados correctamente.</p>';
				
				$cliente = getCliente($_SESSION['id_cliente']);
				$direccion = getDireccion($_SESSION['id_cliente']);
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
			// var_dump($guardar);
        }
    }
 ?>
<body>
		
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Inicio</a> /  
				<span>Mi Cuenta</span>
			</div>
		</div>
	</div>
    <!-- Page Info end -->
    
	<!-- Page -->
	<div class="page-area product-page spad">
		<div class="container">
			<?php
				if (isset($mensaje)) {
					echo $mensaje; //mensaje de error
				}
			?>
			<div class="row" style="margin: 50px 0px;">
				<div class="col-md-3 menu-perfil">
					<h3>Opciones</h3>
					<a href="#" class=""> <i class="fas fa-user" aria-hidden="true"></i> Mi Cuenta</a>
					<a href="#" class=""> <i class="fas fa-shopping-bag" aria-hidden="true"></i> Mis Compras</a>
					<a href="salir.php" class=""> <i class="fas fa-sign-out-alt" aria-hidden="true"></i> Salir</a>
				</div>
				<div class="col-md-9 caja-perfil rounded">
					<form action="" method="post" autocomplete="off">
						<div class="col-md-12 text-center">
							<h3>Tus Datos</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $cliente['nombre'];?>" maxlength="80">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Apellido</label>
									<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" value="<?php echo $cliente['apellido'];?>" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Telefono</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">+595</span>
										</div>
										<input type="text" class="form-control" id="telefono" name="telefono" aria-label="telefono" placeholder="9999 999999" value="<?php echo $cliente['telefono'];?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" value="<?php echo $cliente['email'];?>" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nombre">Tipo Documento</label>
									<select class="selectpicker" id="tipo" name="tipo" data-width="100%">
										<?php 
											$selectRUC = "";
											$selectCI = "";
											if ($cliente['tipo_documento'] == 'RUC') {
												$selectRUC = " selected";
											} else {
												$selectCI = " selected";
											}
										?>
										<option value="RUC" <?php echo $selectRUC;?>> RUC </option>
										<option value="CI" <?php echo $selectCI;?>> CI </option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="nombre">Nro Documento</label>
									<input type="text" class="form-control" id="ruc" name="ruc" placeholder="9999999999" value="<?php echo $cliente['nro_documento'];?>" maxlength="20">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Razón Social</label>
									<input type="text" class="form-control" id="razonsocial" name="razonsocial" placeholder="Razón Social" value="<?php echo $cliente['razon_social'];?>" maxlength="80">
								</div>
							</div>
						</div>
						<hr>
						<div class="col-md-12 text-center">
							<h3>Direcciones</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="tipo">Departamento</label>
									<select class="selectpicker" id="departamento" name="departamento" data-width="100%" data-live-search="true" onchange="carregaCiudades()">
										<option value="NULL"> -- Seleccione un Departamento -- </option>
										<?php
											if ($departs != null) {
												foreach ($departs as $row) {
													if ($direccion['departamento'] == $row['id']) {
														$selected = " selected";
													} else {
														$selected = "";
													}										
										?>
											<option value="<?php echo $row['id'];?>" <?php echo $selected;?>><?php echo $row['nombre'];?></option> 
										<?php 
												} //END FOREACH
											} //END IF
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Ciudad</label>
									<input type="hidden" class="form-control" id="alt-ciudad" placeholder="" value="<?php echo $direccion['ciudad'];?>" maxlength="80">
									<select class="selectpicker" id="ciudad" name="ciudad" data-width="100%" data-live-search="true">
										<option value="NULL"> -- Seleccione una Ciudad -- </option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Calle</label>
									<input type="text" class="form-control" id="calle" name="calle" placeholder="Calle, Nro 0" value="<?php echo $direccion['calle'];?>" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Referencias</label>
									<input type="text" class="form-control" id="referencias" name="referencias" placeholder="Referencias" value="<?php echo $direccion['referencia'];?>" maxlength="80">
								</div>
							</div>
						</div>
						<hr>
						<div class="row text-center">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary" name="guardar">Guardar los Cambios</button>
							</div>
						</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- Page end -->

	<script src="js/u_depart_ciudades.js"></script>
	<script>
		$('select').selectpicker();

		var ciudad = document.getElementById("alt-ciudad").value;
		if (ciudad !== "") {
			selectCiudad(ciudad);
			console.log();
		}
	</script>

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>