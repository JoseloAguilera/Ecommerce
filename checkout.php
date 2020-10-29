<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php
include("includes/head.php");
include("includes/funciones.php"); 
$met_pagos= getMetodosDePago();
$met_envio= getMetodosDeEnvio();
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
				<a href="">Home</a> / 
				<a href="">Productos</a> / 
				<a href="">Carrito</a> / 
				<span>Pago</span>
			</div>
			<img src="img/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<?php 
	 if (isset($_SESSION['usuario'])) {
		 $cliente = $_SESSION['usuario'];
	 } else {  ?>
			<script type = "text/javascript">
			  window.location = "ingresar.php?redirect=/checkout.php"
			</script>
	 <?php }
	 ?>
	<div class="page-area cart-page spad">
		<div class="container">
			<form class="checkout-form">
				<div class="row">
					<div class="col-lg-6">
						<h4 class="checkout-title">DATOS DE CLIENTE</h4>
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="nombre" placeholder="Nombre *" value="<?php if (isset($_SESSION['usuario'])) {echo $_SESSION['usuario'];}?>">
							</div>
							<div class="col-md-6">
								<input type="text" name="apellido" placeholder="Apellidos *" value="<?php if (isset($_SESSION['apellido'])) {echo $_SESSION['apellido'];}?>">
								
							</div>
							<div class="col-md-12">
								<input type="text" name="telefono" placeholder="Telefono *" value="<?php if (isset($_SESSION['telefono'])) {echo $_SESSION['telefono'];}?>">
								<input type="text" name="razon_social" placeholder="Razon Social" value="<?php if (isset($_SESSION['razon_social'])) {echo $_SESSION['razon_social'];}?>">
	 							<div class="row">
								 <div class="col-md-3">
									<select name="tipo_documento">
										
										<?php if (isset($_SESSION['tipo_documento'])) { ?>
											<option value="<?php echo $_SESSION['tipo_documento'];?>"><?php echo $_SESSION['tipo_documento'];?></option>
											<?php } else { ?><option value="">Seleccione *</option> <?php } ?>
											<option value="">------------</option>
										<option value="CI">CI</option>
										<option value="RUC">RUC</option>
										<option value="RG">RG</option>
									</select>
								</div>
								<div class="col-md-9">
									<input type="text" name="nro_documento" placeholder="Nro. de Documento" value="<?php if (isset($_SESSION['nro_documento'])) {echo $_SESSION['nro_documento'];}?>">
								</div>
								 </div>

								<input type="email" name="email" placeholder="E-mail *" value="<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];}?>">
								
								<!-- DIRECCION DE ENVIO - CLIENTE  -->
								<?php 
								$cli_direccion = getClienteDireccion($_SESSION['id_cliente']);								
								?>
								<h4 class="checkout-title">DIRECCION DE ENVIO</h4>								
								<!-- //PAIS -->
								<select name="pais" disabled="true">
									<option disabled="true">Pais *</option>
									<option value="1" selected="true" >Paraguay</option>
								</select>
								<!-- //DEPARTAMENTO -->
								<select name="provincias" id="provincias" class="form-control">
									<option value="<?php if(isset($cli_direccion['departamento'])) { echo $cli_direccion['departamento'];} ?>">
									<?php if(isset($cli_direccion['departamento'])) { echo $cli_direccion['departamento'];} else {
										echo "Seleccione un Departamento *";
									} ?>
									</option>
									<?php											
										$departamentos=getDepartamentos();
										foreach($departamentos as $departamento):
									?>							
								<option value="<?php echo $departamento['id'] ?>"><?php echo $departamento['nombre'] ?></option><?php
								 endforeach;
								?>
							    </select>	

								<!-- //CIUDAD -->
								<select name="distritos" id="distritos" class="form-control">
								<option value="<?php if(isset($cli_direccion['ciudad'])) { echo $cli_direccion['ciudad'];} ?>">
									<?php if(isset($cli_direccion['departamento'])) { echo $cli_direccion['departamento'];} else {
										echo "Seleccione una ciudad *";
									} ?>
								</select>
								<!-- //CALLE // DIRECCION -->
							<input name="direccion" value="<?php if(isset($cli_direccion['calle'])) { echo $cli_direccion['calle'];} ?>"type="text" placeholder="Dirección / Referencia / Nro. de Casa o Departamento *">
							<input name="observacion" type="text" placeholder="Observacion sobre el pedido(opcional)">	
								
							<div class="checkbox-items">
								<div class="ci-item">
										<input type="checkbox" name="terminos" id="terminos">
										<label for="terminos">Acepto los terminos y condiciones</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="order-card">
							<div class="order-details">
							<div class="od-warp">					
												
								
							<div class="shipping-info">
								
								<h4>METODO DE ENVIO</h4>
									<p>Seleccione un metodo de pago</p>
									<?php foreach ($met_envio as $metodos) { ?>										
										<div class="sc-item">
											<input type="radio" name="sc" id="sc-<?php echo $metodos['id'] ?>">
										     <label for="sc-<?php echo $metodos['id'] ?>" onClick="document.getElementById('totalenvio').innerHTML = '<?php echo number_format($metodos['costo'], 0, ',', '.')." Gs"; ?>'">
											 <?php echo $metodos['descripcion'] ?><span><?php if ($metodos['costo'] == 0) {
												echo "Gratis!";
											 } else {
												echo number_format($metodos['costo'], 0, ',', '.')." Gs";
											 }
											 ?>
											</span></label>

									     </div>
									<?php  } ?>								
								
							</div>						
							
									<!--h4>Cupon code</h4>
									<p>Enter your cupone code</p>
									<div class="cupon-input">
										<input type="text">
										<button class="site-btn">Apply</button>
									</div-->
								</div>								

							</div>

							<div class="payment-method">
								
								<h4>METODO DE PAGO</h4>
									<p>Seleccione un metodo de pago</p>
									<?php foreach ($met_pagos as $metodos) { ?>										
										<div class="pm-item">
											<input type="radio" name="pm" id="<?php echo $metodos['id'] ?>" >
										    <label for="<?php echo $metodos['id'] ?>"><?php echo $metodos['descripcion'] ?></label>
									     </div>
									<?php  } ?>								
								
							</div>
							<hr>
								
							<div class="od-warp">	
								<h4 class="checkout-title">RESUMEN DE COMPRA</h4>
																	

									<table class="order-table">
										<thead>
											<tr>
												<th>Product</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>

								<?php 
								if (isset($_SESSION['cart'])) {
									foreach ($_SESSION['cart'] as $cart) { ?>											
											<tr>
												<td><?php echo $cart['nombre'] ?></td>
												<td><?php echo number_format($cart['valor_minorista'] *  $cart['qty'], 0, ',', '.')." Gs";?></td>
											</tr>																
										<?php } } ?>
										    <tr class="cart-subtotal">
												<td>Envio</td>
												<td id="totalenvio">Gratis</td>
											</tr>	

										</tbody>

										<tfoot>
											<tr class="order-total">
												<th>Total</th>
												<th><?php echo number_format(getTotalCart(), 0, ',', '.')." Gs";?></th>
											</tr>
										</tfoot>
									</table>


							</div>
							<hr>
							<button class="site-btn btn-full">Realizar Pedido</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Page -->


	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>
    </body>
	<script>
	 $(document).ready(function(e){
	 	/*$("#departamentos").change(function(){
	 		var parametros= "id="+$("#departamentos").val();
	 		$.ajax({
                data:  parametros,
                url:   'includes/provincias.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#provincias").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
	 	})*/

	 	$("#provincias").change(function(){
	 		var parametros= "id="+$("#provincias").val();
	 		$.ajax({
                data:  parametros,
                url:   'includes/ciudades.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#distritos").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
	 	})       
    })
</script>
</html>