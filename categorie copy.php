<!DOCTYPE html>
<html lang="zxx">
<?php include("includes/head.php"); 

include_once "includes/funciones.php";
$totalSubCategorias =0;
if (isset($_GET['cat']) && $_GET['cat'] > 0) {
	
	$categoria = $_GET['cat'];

	$subcategorias = getSubCategorias($categoria);
	
	$totalSubCategorias = count($subcategorias);

}else {
  $categoria="";
}


//ordenar productos
$orderby='id';
$order='DESC';

if (isset($_GET['orderby']) && isset($_GET['order'])) {
	$orderby=$_GET['orderby'];
	$order=$_GET['order'];
	//validacion
	if ($_GET['order'] != 'DESC' && $_GET['order'] != 'ASC') {
		$order='DESC';
	}

}

if (isset($_GET['search'])) {
	$search=$_GET['search'];
}?>
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
				<a href="">Inicio</a> / 
				<span>Personalizados</span>
			</div>
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<?php /*
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
							<option>Marca</option>
						</select>
						<select>
							<option>Ordenar por</option>
						</select>
					</form>
				</div>
			</div>
			<div class="row">
				<?php include_once "includes/funciones.php";
				$productos=getAllProductos();
				
				if ($productos != null) { 
					foreach ($productos as $row) { ?> 
							
				<div class="mix col-lg-3 col-md-6 best">
				    <a href="product.php">
					<div class="product-item">
					<figure>
						<img src="https://d26lpennugtm8s.cloudfront.net/stores/001/152/331/products/img_0744_cr1-24e2441fe7faa0669a16003491647982-1024-1024.jpg" alt="">
						
					</figure>
					<div class="product-info">
						<h6><?php echo $row['nombre'];?></h6>
						<p><?php
										$precio = "";
										if ($row['contado'] > 0) {
											$precio = number_format($row['contado'], 0, ',', '.')." gs";
										} else {
											$precio = "Sob consulta ";
										}
										echo $precio;
									?></p>
						<a href="#" class="site-btn btn-line">Agregar al Carrito</a>
					</div>
				</div>
				</a>
				</div>

				<?php } 
						} ?>

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
	*/?>
	
	<div class="container gral-container">
				<div class="box-title">
					 <h3 class="h2 text-center">PRODUCTOS</h3>
				     <p class="description"></p>
				</div>

				<div class="row">
					<div class="col-md-3">
						<!--Accordion wrapper-->
						<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

						  <!-- Accordion card -->
						  <div class="card" id="block-categoria">
						    <!-- Card header -->
						    <div class="card-header bg-primario" role="tab" id="headingOne1">
						      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
						        aria-controls="collapseOne1">
						        <h5 class="mb-0">
						          Categorias <i class="fas fa-angle-down rotate-icon"></i>
						        </h5>
						      </a>
						    </div>

						    <!-- Card body -->
						    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
						      data-parent="#accordionEx">
						      <div class="card-body">						      	
						      	
						      	<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
						      data-parent="#accordionEx">
						      <div class="card-body">
								  <?php  
								  $categorias = getCategorias();
								  foreach ($categorias as $categoria){
									$subcategorias = getSubCategorias($categoria['id']);
								    
								  }
								  $totalSubCategorias = count($subcategorias);
								  var_dump($totalSubCategorias);
								  if($totalSubCategorias > 0) { ?>

									<a href="productos.php?cat=<?php echo($categoria['id']) ?>"><?php echo($categoria['nombre']) ?></a><hr>	
									  <?php 
									  
									  foreach ($subcategorias as $subcategoria): ?>
						      		<a href="productos.php?cat=<?php echo($subcategoria['id']) ?>"><?php echo($subcategoria['nombre']) ?></a><hr>							        
						      	    <?php endforeach ?>	

						      	<?php } else { ?>

						      	
						      	<?php /*foreach ($categorias  as $categoria): ?>
						      		<a href="productos.php?cat=<?php echo($categoria['id']) ?>"><?php echo($categoria['nombre']) ?></a><hr>							        
						      	<?php endforeach */?>	


						      	<?php }  ?>	


						      </div>
						    </div>


						      


						      </div>
						    </div>



						    

						  </div>
						  <!-- Accordion card -->
						 
						</div>
						<!-- Accordion wrapper -->

					</div>
					<div class="col-md-9">				
					   
					    <div class="row">
					    	<?php if (!$productos): ?>
								<div class="alert alert-danger" role="alert">
									Ops! não encontramos nenhum resultado para sua busca :D<br>
									<a href="index.php" style="color: black">Voltar para o Inicio</a>
								</div>
							<?php endif ?>

					    	<?php foreach ($productos as $producto) { 				
										
										//obtenemos la imagen destacada
										$imgDestacada = getImagenes($producto['id'], '2');
										$cantImagen = count($imgDestacada);
										
																
							?>
					    
					    <div class="col-md-4 col-sm-6">		            
		            <div class="product-grid2">
		                <div class="product-image2">
		                    <a href="detalles.php?id=<?php echo($producto['id']) ?>">
                    	
		                    	<?php if ($imgDestacada){ ?>    
		                    	        
		                    	        

		                    	        <?php if ($cantImagen > 1) {	//SI HAY MAS DE 1 IMAGEN

		                    	        	$i=1;
			                    			foreach ($imgDestacada as $img) { ?>                   			
			                    			<img class="pic-<?php echo($i) ?>" src="images/productos/<?php echo($img['imagen']); ?>">
			                    			<?php
			                    			  $i= $i+1;
			                    			}

			                    		} else { 	//SI UNA SOLA IMAGEN
			                    			foreach ($imgDestacada as $img) { ?>                   			
			                    			<img class="pic" src="images/productos/<?php echo($img['imagen']); ?>">			                    			
			                    			<?php }
			                    		} ?>
		                    	        
		                    	    <?php  } else { //SI NO HAY N?> 
		                    			<img class="pic" src="images/productos/default.jpg">
		                    	     <?php } ?>
		                    </a>
		                    <ul class="social">
		                        <!--li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li-->
		                        <!--li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li-->
		                         <li><a href="?action=addcart&id=<?php echo($producto['id']) ?>" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
		                    </ul>
		                    <a class="add-to-cart bg-primario" href="detalles.php?id=<?php echo($producto['id']) ?>">Detalles</a>
		                </div>
		                <div class="product-content">
		                    <h3 class="title">
		                    	<a href="detalles.php?id=<?php echo($producto['id']) ?>">
		                    	<?php 
										if ($producto['lang_nombre'] != null) {
											echo $producto['lang_nombre'];
										} else {
										    echo $producto['nombre']; 
										} ?>
		                   		</a>
		                	</h3>
		                    <span class="price">U$ <?php echo($producto['precio']) ?></span>
		                </div>
		            </div>
		        </div>        
			        
			        <?php } ?>
			    </div>
			</div>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
    </body>
</html>