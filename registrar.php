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
		if (isset($_POST['nuevo'])){
            // var_dump($_POST);
            if(isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['contrasena']) &&  $_POST['contrasena'] != '' ) {
                if ($_POST['contrasena'] == $_POST['contrasena2']) {
                    $contrasena = md5($_POST['contrasena']);
                    $incluir = newUsuario ($_POST['nombre'], $_POST['apellido'], $_POST['email'], $contrasena);
                    if (substr($incluir,0,1) == "E") {
                        $mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
                    } else if ($incluir == null) {
                        $mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
                    } else {			
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['usuario'] = $_POST['nombre'];
                        $_SESSION['id_cliente'] = $incluir;
                        $_SESSION['mayorista'] = 0;
                        echo "<script type='text/javascript'>document.location.href='index.php';</script>";
                    }    
                } else {
                    $mensaje = '<p class="text-center alert alert-danger">¡Verifique sus datos! Las contraseñas no coinciden.</p>';
                }
            } else {
                $mensaje = '<p class="alert alert-danger">Por favor, ¡Ingrese Todos los Datos!</p>';
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
            <div class="register-box" id="register">
                <div class="register-logo">
                    <h3 class="text-center">Regístrese</h3>
                </div>

                <div class="register-box-body">
                    <p class="login-box-msg">Ingrese sus datos</p>
                    <?php
                        if (isset($mensaje)) {
                            echo $mensaje; //mensaje de error
                        }
                    ?>
                    <form method="post" autocomplete="off">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Contraseña" name="contrasena" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Repita la contraseña" name="contrasena2" required>
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat" name="nuevo">Registrarse</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                    <!--div class="social-auth-links text-center">
                        <br>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entrá usando
                            Facebook</a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Entrá usando
                            Google+</a>
                    </div>
                    <!-- /.social-auth-links -->
                    <br>
                    <div class="text-center">
                        <a href="ingresar.php">¡Estoy registrado!</a>
                        <!-- <a nohref class="text-center" onClick="viewLogin()" style="cursor:pointer;">¡Estoy registrado!</a> -->
                    </div>
                </div> <!-- /.form-box -->
            </div> <!-- /.register-box -->
		</div>
	</div>
    <!-- Page end -->
    
	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>