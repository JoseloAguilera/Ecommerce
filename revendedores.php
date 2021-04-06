<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	include("includes/head.php"); 
	include_once "includes/funciones.php";
	if (!isset($_SESSION['mayorista'])){
		$_SESSION['mayorista']=0;
	}
	$clientes = getRevendedores();

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
				<a href="index.php">Inicio</a> / 
				<span><a>Revendedores</a></span>
			</div>
		</div>
	</div>
	<!-- Page Info end -->
	<div class="container gral-container">
		<br>
		<div class="row">
							
			<div class="col-md-12">					   
				<div class="row">
					
						<?php				
							if ($clientes != null) { 
								$cantProd = count($clientes);
								foreach ($clientes as $row) { 
						?> 				
						<div class="mix col-lg-4 col-md-4 best">
							<a>
								<div class="product-item">
									<figure>
									<img src="img/revendedores/<?php echo $row['url'];?>" class="img-fluid img-thumbnail" alt="revendedor" style="max-width: 150px;">
									</figure>
									<div class="product-info">
										<h6><?php echo $row['nombre']?></h6>
										<h6><?php echo $row['telefono']?></h6>
										<p><?php
											echo $row['direccion']
										?></p>
										<!--a href="" class="site-btn btn-line">Agregar al Carrito</a-->
									</div>  <!-- product-info -->
								</div><!-- product-item -->
							</a>
						</div> <!-- mix col-lg-4 -->
					
					
				<?php }
				} //else $productos ?>
				</div> <!-- row -->
			</div> <!-- col-md-12 -->
		</div> <!-- row -->	
	</div><!-- container -->


	
	<br>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script type="text/javascript">
	  //DataTable
   		 $(document).ready(function() {
        		$('#tabladatos').DataTable( {
            		dom: 'Bfrtip',
            		order: [[ 0, "asc" ]],
            		orientation: 'landscape',
            		pageSize: 'LEGAL',
            		buttons: [
                		'copyHtml5',
                		'excelHtml5',
                		'pdfHtml5'
            		]
        		});
    		});
	</script>
  
</body>
</html>