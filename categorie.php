<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	include("includes/head.php"); 

	/**************/
	/* PAGINACION */
	/**************/

	//Crea una variable para saber en que pagina estás
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	
	$prod_por_pag = 6;
	$offset = ($pageno-1) * $prod_por_pag; 

	$auxiliar = "";

	// var_dump($offset);
	/**************/
	/* PAGINACION */
	/**************/

	if (!isset($_SESSION['mayorista'])){
		$_SESSION['mayorista']=0;
	}
	
	include_once "includes/funciones.php";
	define('NUM_ITEMS_BY_PAGE', 6);
	$totalSubCategorias = 0;
	if (isset($_GET['cat']) && $_GET['cat'] > 0) {
		$categoria = $_GET['cat'];
		$productos = getProdbyCategoria($categoria, $offset, $prod_por_pag);
		if ($productos != null) {
			$total_pag = countProdbyCategoria($categoria);
			$total_pag = sizeof($total_pag);
			$auxiliar = "cat=".$_GET['cat']."&";	
		}
	} else {
		$categoria = "";
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
		$productos = getProdbySearch($search, $offset, $prod_por_pag);
		if ($productos != null) {
			$total_pag = countProdbySearch($search);
			$total_pag = $total_pag[0];
			$auxiliar = "search=".$_GET['search']."&";
		}
	}

	if ($productos != null) {
		//Divide las cantidades de productos por la cantidade que puede mostrar en página
		$total_pag = ceil($total_pag / $prod_por_pag);
	} else {
		$total_pag = null;
	}
	// var_dump($total_pag);
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
				<span><a href="categoria.php?id=<?php echo getCategoria($categoria)['nombre']; ?>"></a><?php echo getCategoria($categoria)['nombre']; ?></span>
			</div>
		</div>
	</div>
	<!-- Page Info end -->

	<div class="container gral-container">
		<br>
		<div class="box-title">
			<?php
				$categ=getCategoria($categoria);
				if( $categ ){
			?>
			<h3 class="h2 text-center">Productos en <?php echo $categ['nombre']?> </h3>
			<?php
				} else {
			?>
			<h3 class="h2 text-center">Busqueda por '<?php echo $_GET['search']?>' </h3>
			<?php } //end else ?>
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
						<div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
							<div class="card-body">				      	
							<?php  
								$categorias = getCategorias();
								$i=1;
								foreach ($categorias as $categoria){
							?>  	
								<a type="button" class="listado" href="categorie.php?cat=<?php echo($categoria['id']) ?>"><b><?php echo($categoria['nombre']) ?></b></a><!--a data-toggle="collapse" data-target="#demo"><i class="fas fa-caret-down"></i></a--><br>
								<div>
									<?php 
										$subcategorias = getSubCategorias($categoria['id']); 
										$i=$i+1;
										if($subcategorias){
											foreach ($subcategorias as $subcategoria) {
									?>
										<a  class="listado" href="categorie.php?cat=<?php echo($subcategoria['id']) ?>"><?php echo($subcategoria['nombre']) ?></a><br>
									<?php 
												} //END FOREACH
											}//END IF
									?>
								</div>
							<?php
								} //END FOREACH
							?>
							</div> <!-- .card-body -->
						</div> <!-- .collapseOne1 -->
					</div><!-- Accordion card --> 
				</div> <!-- Accordion wrapper -->
			</div>
					
			<div class="col-md-9">					   
				<div class="row">
					<?php 
						if ($productos == NULL){
					?>
					<div class="alert alert-danger" role="alert">
						Ups! no encontramos ningún resultado para su búsqueda :D<br>
						<a href="index.php" style="color: black">Volver al Inicio</a>
					</div>
					<?php } else { ?>
					<div class="row">
						<?php				
							if ($productos != null) { 
								$cantProd = count($productos);
								foreach ($productos as $row) { 
						?> 				
						<div class="mix col-lg-4 col-md-4 best">
							<a href="product.php?id=<?php echo $row['id'];?>">
								<div class="product-item">
									<figure>
										<?php
											$foto = getProdImage($row['id']);
											
										?>
										<img src="img/productos/<?php echo $foto['url'];?>" class="img-fluid img-thumbnail" alt="producto">
										<?php  //END FOREACH $foto?>
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
												$precio = "Sobre consulta";
											}
											echo $precio;
										?></p>
										<!--a href="" class="site-btn btn-line">Agregar al Carrito</a-->
									</div>  <!-- product-info -->
								</div><!-- product-item -->
							</a>
						</div> <!-- mix col-lg-4 -->
					<?php 
							} //END FOREACH $productos
							if ($total_pag != null){ //IF PAGINACION
					?>
					<div class="col-md-12">
						<nav aria-label="Page navigation example">
							<ul class="pagination justify-content-center">
								<li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?".$auxiliar."pageno=".($pageno - 1); } ?>" tabindex="-1" aria-disabled="true"><</a>
								</li>
								<?php
									for ($pag = 0; $pag < $total_pag; $pag++) {
										if ($pag+1 == $pageno){
											$active = " active";
										} else { 
											$active = "";
										}
								?>
									<li class="page-item <?php echo $active;?>"><a class="page-link" href="<?php echo "?".$auxiliar."pageno=".($pag + 1);?>"><?php echo $pag+1;?></a></li>
								<?php
									}
								?>
								<li class="page-item <?php if($pageno >= $total_pag){ echo 'disabled'; } ?>">
									<a class="page-link" href="<?php if($pageno >= $total_pag){ echo '#'; } else { echo "?".$auxiliar."pageno=".($pageno + 1); } ?>">></a>
								</li>
							</ul>
						</nav>
					</div>
					<?php
							} //END IF PAGINACION
						} //END IF $productos
					?>
					</div> <!-- row -->
				<?php } //else $productos ?>
				</div> <!-- row -->
			</div> <!-- col-md-9 -->
		</div> <!-- row -->	
	</div><!-- container -->
	<br>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
</body>
</html>