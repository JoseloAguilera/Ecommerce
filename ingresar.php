<!DOCTYPE html>
<html lang="zxx">
<?php 
	session_start();
	include("includes/head.php");
	include("includes/funciones.php");
	include("includes/cart.php");
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
			<div class="login-box" id="login">
                <div class="register-logo">
                    <h3 class="text-center">Iniciar Sesión</h3>
                </div>
                <div class="login-box-body">
                    <p class="login-box-msg">Ingrese su Usuario y Contraseña</p>
                    <?php
                        if (isset($mensaje)) {
                            echo $mensaje; //mensaje de error
                        }
                    ?>
                    <form action="" method="post" autocomplete="off">
                        <div class="form-group has-feedback">
                            <input type="email" name="usuario" class="form-control" placeholder="Email" required>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-6 col-xs-offset-3">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <br>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entrá usando
                            Facebook</a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Entrá usando
                            Google+</a>
                    </div>
                    <br>
                    <div class="text-center">
                        <a nohref class="text-center" onClick="viewForgot()" style="cursor:pointer;">¿Olvidaste tu contraseña?</a><br>
                        <a nohref class="text-center" onClick="viewRegister()" style="cursor:pointer;">¿Aún no te has registrado?</a>
                    </div>
                </div> <!-- /.login-box-body -->
            </div> <!-- /.login-box -->
            
            <div class="register-box" id="register" style="display: none;">
                <div class="register-logo">
                    <h3 class="text-center">Regístrese</h3>
                </div>

                <div class="register-box-body">
                    <p class="login-box-msg">Ingrese sus datos</p>
                    <form method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Nombre Completo">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Contraseña">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Repita la contraseña">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                    <div class="social-auth-links text-center">
                        <br>
                        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Entrá usando
                            Facebook</a>
                        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Entrá usando
                            Google+</a>
                    </div>
                    <!-- /.social-auth-links -->
                    <br>
                    <div class="text-center">
                        <a nohref class="text-center" onClick="viewLogin()" style="cursor:pointer;">¡Estoy registrado!</a>
                    </div>
                </div> <!-- /.form-box -->
            </div> <!-- /.register-box -->

            <div class="register-box" id="forgot" style="display: none;">
                <div class="register-logo">
                    <h3 class="text-center">Recuperar contraseña</h3>
                </div>

                <div class="register-box-body">
                    <p class="login-box-msg">Ingrese sus datos</p>
                    <form method="post">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Recuperar</button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                    <br>
                    <div class="text-center">
                        <a nohref class="text-center" onClick="viewLogin()" style="cursor:pointer;">¡Recordé mi contraseña!</a><br>
                        <a nohref class="text-center" onClick="viewRegister()" style="cursor:pointer;">¿Aún no te has registrado?</a>
                    </div>
                </div> <!-- /.form-box -->
            </div> <!-- /.forgor-box -->
		</div>
	</div>
	<!-- Page end -->

    <script>
        //Hide Login Show Register
        function viewRegister(){
            $('#login').hide();
            $('#forgot').hide();
            $('#register').show();
        }
        //Hide Login Show Register
        function viewLogin(){
            $('#register').hide();
            $('#forgot').hide();
            $('#login').show();
        }
        //Hide Login Show Register
        function viewForgot(){
            $('#login').hide();
            $('#register').hide();
            $('#forgot').show();
        }
    </script>
	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>