<!DOCTYPE html>
<html lang="zxx">
<?php include("includes/head.php"); ?>
<body>
	<!-- Page Preloder -->
	<!--div id="preloder">
		<div class="loader"></div>
	</div-->
	
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->

	
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<img src="http://d26lpennugtm8s.cloudfront.net/stores/001/152/331/themes/idea/slide-1594664993416-7849979786-1f40ebf6ed6fb4314d3c5ddb566e08441594664994.jpg?939121902" height="100%" width="100%">
				
				<!--div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div-->
			</div>
			<div class="hs-item">
			<img src="http://d26lpennugtm8s.cloudfront.net/stores/001/152/331/themes/idea/slide-1594664993416-7849979786-1f40ebf6ed6fb4314d3c5ddb566e08441594664994.jpg?939121902" height="100%" width="100%">
				<!--div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">from $19.90</div>
						<h2><span>2018</span> <br>summer collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div-->
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
				    <a href="product.php">
					<div class="product-item">
					<figure>
						<?php
							$foto=getProdImages($row['codigo']);
							foreach ($foto as $result){
						?>
						<img src="admin/img/productos/<?php echo $result['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
						<?php }?>
					</figure>
					<div class="product-info">
						<h6><?php echo $row['nombre']?></h6>
						<p><?php
										$precio = "";
										if ($row['contado'] > 0) {
											$precio = number_format($row['contado'], 0, ',', '.')." gs";
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
				    <a href="product.php">
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
										if ($row['contado'] > 0) {
											$precio = number_format($row['contado'], 0, ',', '.')." gs";
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

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
<script>	
	$(document).ready(function() {
      $("#owl-demo").owlCarousel({
          navigation : true, // Show next and prev buttons
          slideSpeed : 300,
          paginationSpeed : 400,
          singleItem:true
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