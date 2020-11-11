<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	include("includes/head.php"); 

	include_once "includes/funciones.php";
	define('NUM_ITEMS_BY_PAGE', 6);
	$totalSubCategorias = 0;
	if (isset($_GET['cat']) && $_GET['cat'] > 0) {
		$categoria = $_GET['cat'];
		$productos = getProdbyCategoria($categoria);
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
		$productos = getProdbySearch($search);
	}

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
				<span><?php echo getCategoria($categoria)['nombre']; ?></span>
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
						Ops! não encontramos nenhum resultado para sua busca :D<br>
						<a href="index.php" style="color: black">Voltar para o Inicio</a>
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
											$foto = getProdImages($row['id']);
											foreach ($foto as $result){
										?>
										<img src="admin/img/productos/<?php echo $result['url'];?>" class="img-fluid img-thumbnail" alt="producto">
										<?php } //END FOREACH $foto?>
									</figure>
									<div class="product-info">
										<h6><?php echo $row['nombre']?></h6>
										<p><?php
											$precio = "";
											if ($row['valor_minorista'] > 0) {
												$precio = number_format($row['valor_minorista'], 0, ',', '.')." gs";
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