<!DOCTYPE html>
<html lang="zxx">
<?php 
require "includes/funciones.php";
include("includes/head.php"); 
?>
<body>
	<!-- Page Preloder -->
	<!--div id="preloder">
		<div class="loader"></div>
	</div-->
	
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->

	
	<!-- Hero section -->
	<section style="padding:0px !important;">
			<div class="container-fluid ">
                <div class="row">
                	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="img/bg2.jpg" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="img/bg3.jpg" alt="Second slide">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
                </div>
            </div>
		</section>
	<!-- Hero section end -->
	
	
	<!-- Product section -->
	<section class="product-section spad">
	<?php include_once "includes/funciones.php";?>
		<div class="container">
		    <div class="col-xl-8 mx-auto text-center">
				<div class="section-title">
					<br>
					<h4>Productos Destacados</h4>
				</div>
			</div>
			<div class="row" id="product-filter">
			
			<?php
				$destaque=getProductosDestacados();
				$switch=0;
				//var_dump($destaque);
				
				if ($destaque != null) { 
					foreach ($destaque as $row) { 
						if($switch<8) {?> 				
					<div class="mix col-lg-3 col-md-6 best">
				    <a href="product.php?id=<?php echo $row['id'] ?>">
					<div class="product-item">
					<figure>
						<?php
							$foto=getProdImages($row['id']);
							foreach ($foto as $result){
						?>
						<img src="admin/img/productos/<?php echo $result['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
						<?php }?>
					</figure>
					<div class="product-info">
						<h6><?php echo $row['nombre']?></h6>
						<p><?php
										$precio = "";
										if ($row['valor_minorista'] > 0) {
											$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
										} else {
											$precio = "Sobre consulta ";
										}
										echo $precio;
									?></p>
						<a href="#" class="site-btn btn-line">Agregar al Carrito</a>
					</div>
				</div>
				</a>
				</div>

				<?php 	$switch=$switch+1;	
							}
						}
					} ?>

				
			</div>
		</div>
	</section>
	<!-- Product section end -->

	<section class="section-info">
		<div class="container">
		
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-credit-card-alt"></i>
						<h4>¡Comprá online!</h4>
						<p>Pagá con cualquier medio de pago </p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-truck"></i>
						<h4>Envios a todo el Pais</h4>
						<p>Elegí donde recibir tus pedidos </p>
						
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service">
						<i class="fa fa-shield"></i>
						<h4>Protegemos Tu Compra</h4>
						<p>Compra de forma segura con Pagopar </p>
					</div>
				</div>
			</div>	
		</div>
	</section>


	<section class="section-dark">
		
		<div class="container">
		    <div class="col-xl-8 mx-auto text-center">
				<div class="section-title">
					<h4>Productos Más Recientes</h4>
				</div>
			</div>		
			<div class="owl-carousel owl-theme">
			
			<?php 
				$novedades=getAllProductos();			
				foreach ($novedades as $row) { ?>
				<div class="item">
					<div class="mix col-lg-12 col-md-12 best">
				    <a href="product.php?id=<?php echo $row['id'] ?>">
					<div class="product-item">
					<figure>
					<?php
							$foto=getProdImages($row['id']);
							foreach ($foto as $result){
						?>
							<img src="admin/img/productos/<?php echo $result['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
							<?php } ?>
					</figure>
					<div class="product-info">
					<h6><?php echo $row['nombre']?></h6>
						<p><?php
										$precio = "";
										if ($row['valor_minorista'] > 0) {
											$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
										} else {
											$precio = "Sobre consulta ";
										}
										echo $precio;
									?></p>
						<a href="#" class="site-btn btn-line">Agregar al Carrito</a>
					</div>
				</div>
				</a>
				</div>
				</div>

				<?php } ?>
		</div>
	</section>

	<section>
		<div class="container banner-footer">
			<div class="row">
				<div class="col-12">
				<div class="row">
					<div class="col-4">
						<figure>
							<img src="img/banners/banner3.png" alt="">
						</figure>
					</div>
					<div class="col-4">
						<figure>
						<img src="img/banners/banner1.png" alt="">
						</figure>
					</div>
					<div class="col-4">
						<figure>
						<img src="img/banners/banner2.png" alt="">
						</figure>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
<script>	
	$(document).ready(function() {
      $("#owl-slider").owlCarousel({
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          responsive:{
	        0:{
	            items:1
	        },
        	600:{
           items:1
        	},
       		 1000:{
	            items:1
        	}
	    	}
      });
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
    </body>
</html>