<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php 
	require "includes/funciones.php";
	include("includes/head.php"); 
	if (!isset($_SESSION['mayorista'])){
		$_SESSION['mayorista']=0;
	}
	$slider = getSlider();
	$banner = getBanner();
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
						<?php
							$size = count($slider);
							$primero = "active";
							for ($x = 0; $x < $size; $x++) {
						?>
						<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x;?>" class="<?php echo $primero;?>"></li>
						<?php
								$primero = "";
							} 
						?>
					</ol>
					<div class="carousel-inner">
						<?php 
							$primero = "active";
							foreach ($slider as $slide) {
						?>
						<div class="carousel-item <?php echo $primero;?>">
							<a href="<?php echo $slide['url'];?>"><img class="d-block w-100" src="<?php echo "img/banners/".$slide['img'];?>" alt="<?php echo $slide['text_alt'];?>"></a>
						</div>
						<?php
								$primero = "";
							} 
						?>
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
													$foto=getProdImage($row['id']);
													//foreach ($foto as $result){
												?>
												<img src="img/productos/<?php echo $foto['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
												<?php //}?>
											</figure>
											
											<div class="product-info">
												<h6><?php echo $row['nombre']?></h6>
												<p>
													<?php
														$precio = "";
														if ($row['valor_minorista'] > 0) {
															if($_SESSION['mayorista']==1){
																$precio = number_format($row['valor_mayorista'], 0, ',', '.')." gs";
															}else{
																$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
															}
														} else {
															$precio = "Sobre consulta ";
														}
														echo $precio;
													?>
												</p>
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
														$foto=getProdImage($row['id']);
														//foreach ($foto as $result){
													?>
														<img src="img/productos/<?php echo $foto['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
														<?php //} ?>
												</figure>
												<div class="product-info">
													<h6><?php echo $row['nombre']?></h6>
													<p>
														<?php
															$precio = "";
															if ($row['valor_minorista'] > 0) {
																if($_SESSION['mayorista']==1){
																	$precio = number_format($row['valor_mayorista'], 0, ',', '.')." gs";
																}else{
																	$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
																}
															} else {
																$precio = "Sobre consulta ";
															}
															echo $precio;
														?>
													</p>
												<!--a href="#" class="site-btn btn-line">Agregar al Carrito</a-->
												</div>
											</div>
										</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<?php
						if ($banner != null) {
							$col = count($banner);
							$col = 8/count($banner);
							if (count($banner) == 1) {
								$class = "col-md-2";
							} else {
								$class = "";
							}

							foreach ($banner as $bnnr) {
					?>
					<div class="<?php echo $class;?>"></div>
					<div class="col-4 text-center banner-middle">					
						<div class="">
							<img src="img/banners/<?php echo $bnnr['img'];?>" alt="<?php echo $bnnr['text_alt'];?>">
						</div>
					</div>
					<div class="<?php echo $class;?>"></div>
					<?php
							}
						}
					?>
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
														$foto=getProdImage($row['id']);
														//foreach ($foto as $result){
													?>
														<img src="img/productos/<?php echo $foto['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
													<?php //} ?>
												</figure>
												<div class="product-info">
													<h6><?php echo $row['nombre']?></h6>
													<p>
														<?php
															$precio = "";
															if ($row['valor_minorista'] > 0) {
																if($_SESSION['mayorista']==1){
																	$precio = number_format($row['valor_mayorista'], 0, ',', '.')." gs";
																}else{
																	$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
																}
															} else {
																$precio = "Sobre consulta ";
															}
															echo $precio;
														?>
													</p>
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