<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	// session_start();
	include("includes/head.php");
	include("includes/funciones.php");
    include("includes/cart.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['login'])){
            // var_dump($_POST);
            if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['contrasena']) &&  $_POST['contrasena'] != '' ) {
                $contrasena = md5($_POST['contrasena']);
                $login = getUsuario ($_POST['email'], $contrasena);
                
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['usuario'] = $login['nombre'];
                echo "<script type='text/javascript'>document.location.href='index.php';</script>";
            } else {
                $mensaje = '<p class="alert alert-danger">Por favor, Ingrese Todos los Datos!</p>';
            }
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
			<div class="row" style="margin: 50px 0px;">
				<div class="col-md-3 menu-perfil">
					<h3>Opciones</h3>
					<a href="#" class=""> <i class="fas fa-user" aria-hidden="true"></i> Perfil</a>
					<a href="#" class=""> <i class="fas fa-shopping-bag" aria-hidden="true"></i> Mis Compras</a>
					<a href="salir.php" class=""> <i class="fas fa-sign-out-alt" aria-hidden="true"></i> Salir</a>
				</div>
				<div class="col-md-9 caja-perfil rounded">
					<form action="" method="post" autocomplete="off">
						<div class="col-md-12 text-center">
							<h3>Tus Datos</h3>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Nombre Completo</label>
									<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Completo" maxlength="80">
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
										<input type="text" class="form-control" placeholder="telefono" aria-label="telefono" placeholder="9999 999999">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="email@email.com" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nombre">Fecha Nacimento</label>
									<input type="text" class="form-control" id="nacimento" name="nacimento" placeholder="99/99/9999" maxlength="20">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="nombre">RUC</label>
									<input type="text" class="form-control" id="ruc" name="ruc" placeholder="9999999999" maxlength="20">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Razón Social</label>
									<input type="text" class="form-control" id="razonsocial" name="razonsocial" placeholder="Razón Social" maxlength="80">
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
									<label for="nombre">Ciudad</label>
									<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" maxlength="80">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nombre">Barrio</label>
									<input type="text" class="form-control" id="barrio" name="barrio" placeholder="Barrio" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Calle</label>
									<input type="text" class="form-control" id="calle" name="calle" placeholder="Calle, Nro 0" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Referencias</label>
									<input type="text" class="form-control" id="referencias" name="referencias" placeholder="Referencias" maxlength="80">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="nombre">Observaciones</label>
									<input type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" maxlength="80">
								</div>
							</div>
						</div>
						<hr>
						<div class="row text-center">
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary" name="nuevo">Guardar los Cambios</button>
							</div>
						</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<!-- Page end -->

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>