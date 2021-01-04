<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	include("includes/head.php"); 

	if (!isset($_SESSION['mayorista'])){
		$_SESSION['mayorista']=0;
	}
	
	include_once "includes/funciones.php";
	
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
		<div class="box">
					<!-- Corpo de Caja -->
					<div class="box-body">
						<div class="box-body table-responsive">
							<table class="table table-striped table-bordered display nowra" id="tabladatos">
							<thead>
								<tr>
									<!-- <th>Tipo</th> -->
									<th></th>
									<th>Nombre</th>
									<th>Telefono</th>
									<th>Correo</th>
								</tr>
							</thead>
							<tbody>
                                <?php 
									if ($clientes != null) { 
										foreach ($clientes as $row) {											
								?>
								<tr>
									<!-- <td> -->
										<?php 
											// $mayorista = "";
											// if ($row['mayorista'] == 0) {
											// 	$mayorista = "Minorista";
											// } else {
											// 	$mayorista = "Revendedor";
											// }
											// echo $mayorista;?>
									<!-- </td> -->
									<td><img src="img/revendedores/<?php echo $row['url'];?>" class="img-fluid img-thumbnail" alt="revendedor" style="max-width: 150px;"></td>
									<td><?php echo $row['razon_social'];?></td>
									<td><?php echo $row['telefono'];?></td>
									<td><?php echo $row['email'];?></td>
									
									<!--td>
										<?php 
										/*	$nro_documento = "";
											if ($row['ruc'] == "RUC") {
												$lastnum = strlen($row['documento']) - 1;
												$nro_documento = substr($row['documento'],0,$lastnum)."-".substr($row['documento'],$lastnum,1);
											} else if ($row['ruc'] == "CI") {
												$nro_documento = $row['documento'];
											} else {
												$nro_documento = $row['documento'];
											}
											echo $nro_documento;*/?>
									</td-->
							
								</tr>
								<?php }}?>
							</tbody>
							</table>
						</div>
					</div>	
		</div>
	
	</div><!-- container -->
	<br>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
</body>
</html>