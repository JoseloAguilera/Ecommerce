<?php
ob_start();
session_start();	
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	$id= $_GET['id'];
	ini_set('display_errors', 1);
	include("includes/head.php");
	include("includes/funciones.php");
	include("includes/cart.php");
	$fotos=getProdImages($id);
	$producto=getProducto($id);
	$stock=getProductoStock($id);
	visit($id);
 ?>
<body>
		
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="categorie.php?search=">Productos</a> / 
				<span><?php echo $producto['nombre'];?></span>
			</div>
			<!--h2 class="product-tittle">Cartera femenina</h2-->
			<!--img src="img/page-info-art.png" alt="" class="page-info-art"-->
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area product-page spad">
	<div class="container">
		<div class="row">
			<div class="col-12">	
				<?php if (isset($_GET['addnew']) && $_GET['addnew'] == "success" OR  isset($_GET['addcart']) && $_GET['addcart'] == "success") {	echo "
				<hr><div class='alert alert-success' role='alert'>PRODUCTO AÑADIDO AL CARRITO<br> 
				<a class='white' href='index.php'>CONTINUAR COMPRANDO?</a> 
				<a class='white' href='cart.php'>-> REALIZAR PAGO</a></div><hr>";
				} else {echo "";}?>	
			</div>
		</div>
	</div>
	
		<div class="container">
		<br>
			<div class="row">
				<div class="col-lg-6">
					<figure>
					<?php if (isset($fotos)){ ?>
								<img  class="product-big-img" src="img/productos/<?php echo getProdImage($id)['url'];?>" alt="producto">
							<?php } else { ?>
								<img class="product-big-img" src="img/productos/no-image.png" alt="producto">
							<?php } ?>
					</figure>
					<div class="product-thumbs">
						<div class="product-thumbs-track">
						<?php
						if($fotos!=NULL){
							foreach ($fotos as $result){
						?>
							<div class="pt" data-imgbigurl="img/productos/<?php echo $result['url'];?>"><img src="img/productos/<?php echo $result['url'];?>" alt=""></div>	
						<?php }
						}?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="product-content">
						<h2><?php echo $producto['nombre'];?></h2>
						<div class="pc-meta">
							<h4 class="price">
								Precio: 
								<?php
									$precio = "";
									if ($producto['valor_minorista'] > 0) {
										if($_SESSION['mayorista']==1){
											$precio = number_format($producto['valor_mayorista'], 0, ',', '.')." gs";
										}else{
											$precio = number_format($producto['valor_minorista'], 0, ',', '.')." gs";
										}
									} else {
										$precio = "Sobre consulta ";
									}
									echo $precio;
								?>
							</h4>
						</div>
						
						<!--div class="color-choose">
							<span>Colores:</span>
							<div class="cs-item">
								<input type="radio" name="cs" id="black-color" checked>
								<label class="cs-black" for="black-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color">
								<label class="cs-blue" for="blue-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color"></label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color"></label>
							</div>
						</div-->
						<!--div class="size-choose">
							<span>Tamaño:</span>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size" checked>
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div-->
						<form action="" method="post">
						   <input type="text" value="<?php echo $id; ?>" name="id" class="d-none">
						   <div class="quy-input col-2">
						   <span> Cantidad:</span><input type="number" name="qty" min="1" max="<?php echo $stock['stock'] ?>"value="1" class="form-control">	
						   <br>
						   </div>
						   <?php if($stock['stock']==0) {?>	
						   		<p style="margin-bottom: 0px; color: #212529;">¡Producto sin stock!</p>
							<?php } else {?>
								<p style="margin-bottom: 0px; color: #212529;"> Disponible: <?php echo $stock['stock']; ?>  artículos </p>
							<?php } ?>
						   <button type="submit" name="action" value="addcart" class="site-btn btn-buy" <?php if($stock['stock']==0) { echo 'disabled style="background:#8e8e8e; border: #8e8e8e;"';}?>>  <i class="fa fa-shopping-cart" aria-hidden="true"></i> Agregar al Carrito</button>
						</form>
						
						<br>
						<hr>
						<h4><?php echo $producto['descripcion'];?></h4>
					</div>
				</div>
			</div>
			<!--div class="product-details">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Additional information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews (0)</a>
							</li>
						</ul>
						<div class="tab-content" -->
							<!-- single tab content -->
							<!--div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
							</div>
							<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
								
							</div>
						</div>
					</div>
				</div>
			</div-->
		
		</div>

	</div>
	<!-- Page end -->

	<section class="section-dark">

		<div class="text-center rp-title">
				<h5>Productos Relacionados</h5>
		</div>

		<div class="row">
						
			<div class="owl-carousel owl-theme">
				
				<?php 
					$relacionados=getAllProductosHome();			
					foreach ($relacionados as $row) { ?>
					<div class="item">
									<div class="product">
											<a href="product.php?id=<?php echo $row['id'] ?>">
												<div class="product-item">
											
													<figure>
														<?php
															$foto=getProdImages($row['id']);
															foreach ($foto as $result){
														?>
															<img src="img/productos/<?php echo $result['url'];?>" class="img-fluid img-thumbnail" alt="producto" style="max-width: 300px;">
															<?php } ?>
													</figure>
													<div class="product-info">
														<h6><?php echo $row['nombre']?></h6>
														<p><?php
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
	</section>


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
	<script>	
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
</html>