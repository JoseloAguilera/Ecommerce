<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	$index=0;
	include("includes/head.php"); 

	if (!isset($_SESSION['mayorista'])){
		$_SESSION['mayorista']=0;
	}
	
	include_once "includes/funciones.php";
	

if (isset($_POST['submit'])) {
    //ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
    //error_reporting( E_ALL ); # REMOVE // FOR DEBUG
    $from = "UNCORREO@TUDOMINIO.COM"; // Email con el dominio del Hosting para evitar SPAM
    $fromName = "RPF-WEB"; // Nombre que saldrá en el email recibido
    $to = "joseaguilera1709@gmail.com"; // Dirección donde se enviará el formulario
    $subject = $_POST['validarAsunto']; // Asunto del Formulario

    /* Componemos el mensaje */
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['validarNombre'] . " " . $_POST['validarApellidos'] . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['validarNombre'] . "\r\n";
    $fullMessage .= "Apellidos: " . $_POST['validarApellidos'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['validarEmail'] . "\r\n";
    $fullMessage .= "Teléfono: " . $_POST['validarTelefono'] . "\r\n";
    $fullMessage .= "Tema: " . $_POST['validarTema'] . "\r\n";
    $fullMessage .= "Asunto: " . $_POST['validarAsunto'] . "\r\n";
    $fullMessage .= "Mensaje: " . $_POST['validationMensaje'] . "\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

    /* Creamos las cabeceras del Email */
    $headers = "Organization: RPF WEB\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['validarEmail'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    /* Enviamos el Formulario*/
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
    }
}


?>
<body>
	<!-- Page Preloder -->
	<!--div id="preloder">
		<div class="loader"></div>
	</div-->
	
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->

	<!-- Page Info -->
	<div class="page-info-section page-info-big">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Inicio</a>
			</div>
		</div>
	</div>
	<!-- Page Info end -->

	<div class="container gral-container">
		<div>
			<div class="col-xl-8 mx-auto text-center">
				<div class="section-title">
					<br>
					<hr>
					<h4>CONTÁCTENOS</h4>
					<hr>
				</div>
			</div>
		<form method="POST" action="" class="needs-validation" novalidate>
			<div class="form-row mt-5 justify-content-center">
				<div class="col-md-4 mb-3">
					<label for="validarNombre">Nombre:<span class="red">*</span></label>
					<input type="text" class="form-control" id="validarNombre" name="validarNombre" required>
				</div>
				<div class="col-md-4 mb-3 justify-content-center">
					<label for="validarApellidos">Apellido:<span class="red">*</span></label>
					<input type="text" class="form-control" id="validarApellidos" name="validarApellidos" required>
				</div>
			</div>

			<div class="form-row justify-content-center">
				<div class="col-md-4 mb-3 ">
					<label for="validarEmail">Email:<span class="red">*</span></label>
					<input type="email" class="form-control" id="validarEmail" name="validarEmail" required>
				</div>
				<div class="col-md-4 mb-3">
					<label for="validarTelefono">Teléfono:</label>
					<input type="number" class="form-control" id="validarTelefono" name="validarTelefono" max="999999999">
				</div>
			</div>

			<div class="form-row justify-content-center">
				<div class="col-md-8 mb-3">
					<label for="validarAsunto">Asunto:</label>
					<input type="text" class="form-control" id="validarAsunto" name="validarAsunto" required>
				</div>
			</div>

			<div class="form-row justify-content-center">
				<div class="col-md-8">
					<label for="validationMensaje">Mensaje:<span class="red">*</span></label>
					<textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="3" min="25" required></textarea>
				</div>
			</div>
			<br>
			<div class="form-row mb-10 justify-content-center">
				<div class="col-md-8">
					<button class="btn btn-primary" type="submit" name="submit">Enviar</button>
					<button class="btn btn-success" type="reset" name="reset">Limpiar</button>
				</div>
			</div>

			</form>
			</div> <!--container 2-->
	</div><!-- container -->
	<br>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
  
</body>
</html>