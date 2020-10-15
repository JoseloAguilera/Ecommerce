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
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor adipisci magnam sint eligendi error ratione modi, quidem temporibus illum ipsam consequatur architecto aut animi veniam autem quisquam voluptatem inventore deserunt.</p>
		</div>
	</div>
	<!-- Page end -->

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>