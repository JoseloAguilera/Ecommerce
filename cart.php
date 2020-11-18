<?php 
    ini_set('display_errors', 1);
	session_start();
	if (isset($_SESSION['cart'])) {
		$cart = array($_SESSION['cart']); 
	}
	//var_dump($cart);
?>
<!DOCTYPE html>
<html lang="zxx">
<?php 
	include("includes/head.php");
	include("includes/funciones.php"); 
	include("includes/cart.php");
	
	
	//var_dump($cart);
	//session_destroy();
?>
<body>
	<!-- Page Preloder >
	<div id="preloder">
		<div class="loader"></div>
	</div-->
	
	<!-- Header section -->
	<?php include("includes/header.php"); ?>
	<!-- Header section end -->


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Inicio</a> / 
				<a href="categorie.php">Produtos</a> / 
				<span>Carrito de Compras</span>
			</div>
			
		</div>
		
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
			<?php if (!isset($cart)) {
				echo "NO PROSEE NINGUN PRODUCTO EN SU CARRITO DE COMPRAS";
			} else { ?>
				<div class="cart-table">
				<br><br>
				<table>
					<thead>
						<tr>
							<th class="product-th">Producto	</th>
							<th>precio</th>
							<th>Cantidad</th>
							<th class="total-th">Total</th>
						</tr>
					</thead>
					<tbody>
						
						<?php foreach ($_SESSION['cart'] as $producto) { ?>	
						 
							<tr>		
							<form action="cart.php"  method="post" ?>				
							    <!--input type="text" class="d-none" name="action" value="updatecart"-->
								<input type="text" name="id" value="<?php echo $producto['idproducto'] ?>" class="d-none">
							
						
							<td class="product-col">

									<img src="img/productos/<?php echo $producto['img_producto'] ?>" alt="">
									<div class="pc-title">
										<h4><?php echo $producto['nombre'] ?></h4>
									</div>
								</td>
								<td class="price-col"><?php echo number_format($producto['valor_minorista'], 0, ',', '.')." Gs";?></td>
								
								<td class="quy-col">
									<div class="quy-input">
										<span>Qty</span>
										<input type="number" name="qty" value="<?php echo($producto['qty']) ?>" >
									</div>
								</td>
								
								<?php $precio = number_format($producto['qty']*$producto['valor_minorista'], 0, ',', '.')." Gs";?>
								<td class="total-col">
									<span>
										<?php echo $precio ?>
										
										<!--input type="text" name="qtyup" value="" class=""-->
										<button type="submit" name="action" value="updatecart" class="btn btn-success">  <i class="fa fa-refresh" aria-hidden="true"></i></button>
									
									    <button type="submit" name="action" value="deletecart" class="btn btn-danger">  <i class="fa fa-trash" aria-hidden="true"></i></button>
								</span>
									
								</td>
								</form>	
							</tr>	
									
						<?php 	} ?>
						
					</tbody>
				</table>	
			
				<div class="text-right">
					<br>
				<h4>TOTAL DECOMPRAS</h4>				
				<?php echo number_format(getTotalCart(), 0, ',', '.')." Gs";?>
				</div>
			</div>
			<div class="row cart-buttons">
				<div class="col-lg-5 col-md-5">
				<a href="index.php"><div class="site-btn btn-continue">Continuar Comprando</div></a>
				</div>
				<div class="col-lg-7 col-md-7 text-lg-right text-left">
					<!--div class="site-btn btn-clear">Cancelar Pedido</div-->
					<a href="checkout.php"><div class="site-btn btn-line btn-update">FINALIZAR COMPRA</div></a>
				</div>
			</div>
		<?php }?>
		</div>
		
	</div>
	<!-- Page end -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
    </body>
</html>