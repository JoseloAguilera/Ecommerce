<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php 
	require "includes/funciones.php";
	include("includes/head.php"); 
?>
<body>
<a id="button"></a>
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
				      <img class="d-block w-100" src="http://d26lpennugtm8s.cloudfront.net/stores/001/152/331/themes/idea/slide-1603121583962-1650454221-02b45b607b78830556e74e08a8e69ded1603121587.jpg?164778436" alt="First slide">
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="http://d26lpennugtm8s.cloudfront.net/stores/001/152/331/themes/idea/slide-1597096638181-1942437578-7ed2caa366b1f105f1790a02db9a36291597096639.jpg?164778436" alt="Second slide">
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
		<div class="container-fluid">
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
							<div class="mix col-lg-3 col-md-6 block-product">
								<div class="product">
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
													<form action="cart.php" method="post">
														<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
														<input type="hidden" value="1" name="qty">
														<!--button type="submit" class="site-btn btn-buy" name="action" value="addcart">AÑADIR AL CARRITO</button-->
													</form>
											</div>
									   </div>
									</a>
								</div>
							</div>

				      <?php 	$switch=$switch+1;	
							}
						}
					} ?>

				
			</div>
		</div>
	</section>
	<!-- Product section end -->




	<section class="section-dark">		
		<div class="container-fluid">
			

		    <div class="col-12">
				<div class="section-title">
					<h4>Productos Más Recientes</h4>
				</div>
				<div class="row">				
					<div class="col-4">
						<div class="owl-carousel owl-theme carousel slide" id="cat-destacada">			
							<?php 
								$novedades=getProductosNuevos();			
								foreach ($novedades as $row) { ?>
								<div class="item">
									<div class="product">
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
												<!--a href="#" class="site-btn btn-line">Agregar al Carrito</a-->
												</div>
											</div>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="col-4 banner-middle">					
						<div class="">
							<img src="https://d26lpennugtm8s.cloudfront.net/stores/001/152/331/themes/idea/img-585355031-1588298125-9fdbf6ab9064ebf0a9c39afcc83f0efe1588298126-1024-1024.jpg?1742043555" alt="">
						</div>
					</div>
					<div class="col-4 banner-middle">					
						<div class="">
							<img src="img/banners/cat_01.png" alt="">
					   </div>
					   </div>
		</div>
	</section>

	<section class="section">		
		<div class="container-fluid">		

		    <div class="col-12">
				<div class="row">
					<div class="col-12">
					<div class="section-title">
								<h4>Productos Más Vendidos</h4>
							</div>			  		  			
							<div class="owl-carousel owl-theme" id="owl-product">			
								<?php 
									$novedades=getProductosNuevos();			
									foreach ($novedades as $row) { ?>
									<div class="item">
										<div class="product">
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
													<!--a href="#" class="site-btn btn-line">Agregar al Carrito</a-->
													</div>
												</div>
											</a>
										</div>
									</div>
								<?php } ?>
							</div>
					</div>
					
		</div>
	</section>
	<!--section>
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
	</section-->
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
						<i class="fa fa-money"></i>
						<h4>Compras Mayorista</h4>
						<p>Solicte su cuenta mayorista </p>
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

$('#cat-destacada').owlCarousel({
    loop:false,
    margin:0,
	dots:false,
    nav:true,	
	lazyLoad:true,
	autoplay:true,
	navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:1,
			nav:true,
        },
        600:{
            items:1,
			nav:true,
        },
        1000:{
            items:1,
			nav:true,
        }
    }
})
$('#owl-product').owlCarousel({
    loop:true,
    margin:0,
	dots:false,
	lazyLoad:true,
	autoplay:true,
    nav:true,
	navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{
            items:4
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }



})
</script>
<script>
	
	var btn = $('#button');

	$(window).scroll(function() {
	if ($(window).scrollTop() > 300) {
		btn.addClass('show');
	} else {
		btn.removeClass('show');
	}
	});

	btn.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '300');
	});

</script>
    </body>
</html>