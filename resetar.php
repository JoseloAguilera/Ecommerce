<!DOCTYPE html>
<html lang="zxx">
<?php 
	// session_start();
	include("includes/head.php");
	include("includes/funciones.php");
    include("includes/cart.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['recuperar'])){
            // var_dump($_POST);
            // $contrasena = md5($_POST['contrasena']);
            // $incluir = newUsuario ($_POST['nombre'], $_POST['apellido'], $_POST['email'], $contrasena);
            // if (substr($incluir,0,1) == "E") {
			// 	$tipomensaje = 'error';
			// 	$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			// } else if ($incluir == null) {
			// 	$tipomensaje = 'error';
			// 	$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			// } else {			
            //     $_SESSION['email'] = $_POST['email'];
            //     $_SESSION['usuario'] = $_POST['nombre'];
			// 	echo "<script type='text/javascript'>document.location.href='index.php';</script>";
            // }
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
	        <div class="register-box" id="forgot">
                <div class="register-logo">
                    <h3 class="text-center">Recuperar contraseña</h3>
                </div>

                <div class="register-box-body">
                    <p class="login-box-msg">Ingrese sus datos</p>
                    <form method="post">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat" name="recuperar">Recuperar</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">
                        <a href="ingresar.php">¡Recordé mi contraseña!</a><br>
                        <!-- <a nohref class="text-center" onClick="viewLogin()" style="cursor:pointer;">¡Recordé mi contraseña!</a><br>
                        <a nohref class="text-center" onClick="viewRegister()" style="cursor:pointer;">¿Aún no te has registrado?</a> -->
                    </div>
                </div> <!-- /.form-box -->
            </div> <!-- /.forgor-box -->
		</div>
	</div>
	<!-- Page end -->

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>