<!DOCTYPE html>
<html lang="zxx">
<?php include("includes/head.php"); ?>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info-big">
		<div class="container">
			<h2>Termos</h2>
			<div class="site-breadcrumb">
				<a href="">Inicio</a> / 
				<span>Personalizados</span>
			</div>
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area categorie-page spad">
		<div class="container">
			<div class="categorie-filter-warp">
				<p>Mostrando 12 resultados de 300</p>
				<div class="cf-right">
					<div class="cf-layouts">
						<a href="#"><img src="img/icons/layout-1.png" alt=""></a>
						<a class="active" href="#"><img src="img/icons/layout-2.png" alt=""></a>
					</div>
					<form action="#">
						<select>
							<option>Color</option>
						</select>
						<select>
							<option>Marca</option>
						</select>
						<select>
							<option>Ordenar por</option>
						</select>
					</form>
				</div>
			</div>
			<div class="row">
				<?php for ($i=0; $i < 12; $i++) { ?> 
							
				<div class="mix col-lg-3 col-md-6 best">
				    <a href="product.php">
					<div class="product-item">
					<figure>
						<img src="https://d26lpennugtm8s.cloudfront.net/stores/001/152/331/products/img_0744_cr1-24e2441fe7faa0669a16003491647982-1024-1024.jpg" alt="">
						
					</figure>
					<div class="product-info">
						<h6>Long red Shirt</h6>
						<p>Gs 60.900</p>
						<a href="#" class="site-btn btn-line">Agregar al Carrito</a>
					</div>
				</div>
				</a>
				</div>

				<?php } ?>

			<div class="site-pagination">
				<span class="active">01.</span>
				<a href="">02.</a>
				<a href="">03.</a>
				<a href="">04.</a>
				<a href="">05.</a>
				<a href="">06</a>
			</div>
		</div>
	</div>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
    </body>
</html>