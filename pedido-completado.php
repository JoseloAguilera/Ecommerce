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
                </div>

                <div class="register-box-body">
                    <?php
                    $pedido = getpedido($_GET['ped']);
                        unset($_SESSION['cart']);
                        
                    ?>
                    <h2>GRACIAS POR REALIZAR TU PEDIDO!</h2>
                    <p><?php echo getMetodoPago($pedido['id_met_pago'])['instrucciones'];?></p>
                    <p>
                    Nro. de Pedido: <?php echo  $pedido['id'] ?>
                    <hr>
                    Total: <?php echo  $pedido['total'] ?>
                    <hr>
                    Metodo de Envio: <?php echo getMetodoEnvio($pedido['id_met_envio'])['descripcion'];?>
                    <hr>
                    Costo de Envio: <?php echo  $pedido['total_envio']; ?>
                    <hr>
                    Total A Pagar: <?php echo  $pedido['total'] +$pedido['total_envio']; ?>
                    <hr>
                    <div class="col-lg-12">
				<a href="perfil.php"><div class="site-btn btn-continue">Ver Mis Pedidos</div></a>
				</div>
                    </p>
                
                   
                </div> <!-- /.form-box -->
            </div> <!-- /.register-box -->
		</div>
	</div>
    <!-- Page end -->
    
	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>