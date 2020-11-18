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

    $info_empresa = getInfo("empresa.php");
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
				<span>Empresa</span>
			</div>
		</div>
	</div>
    <!-- Page Info end -->
    
	<!-- Page -->
	<div class="page-area product-page spad">
		<div class="container">
            <div class="box-title">
                <br>                
                <h3 class="h2 text-center">Nuestra Empresa</h3>
                <br>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">	
                    <p><?php echo $info_empresa['contenido'];?></p>
                </div>
                <div class="col-md-1"></div>
            </div>
		</div>
	</div>
	<!-- Page end -->

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
</script>
</html>