<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<?php
include("includes/head.php");
include("includes/funciones.php"); 
$met_pagos= getMetodosDePago();
$calc_envio= getMetodosDeEnvio();
$cart= $_SESSION['cart'];

if (isset($_SESSION['cart'])) {
	$cart= $_SESSION['cart'];
} else { echo "<script type='text/javascript'>document.location.href='index.php';</script>";}

if($_SERVER['REQUEST_METHOD'] == "POST") {
	
	if (isset($_POST['guardar'])){
		/* ****************************************** */		
		/* ****************************************** */
			$ruc = ($_POST['ruc']);
			$id_met_pago = 1;/*$_POST['met_pag'];*/
			$id_met_envio =substr($_POST['calc_envio'], -1);
			$id_cliente = $_SESSION['id_cliente'];			
			$total_envio =  $_SESSION['costo_envio'];
			$total = $_SESSION['total'];
		/* ****************************************** */		
		/* ****************************************** */

		//SAVE
		$guardar = saveCliente ($_SESSION['id_cliente'], $_POST['nombre'], $_POST['apellido'], $_POST['documento'], $ruc, $_POST['razon_social'], $_POST['telefono'], $_POST['email'], $_POST['departamentos'], $_POST['ciudades'], $_POST['calle'], $_POST['referencias']);

		if ($guardar == $_SESSION['id_cliente']) {
			$guardarpedido = savepedidos ($id_cliente, $id_met_pago, $id_met_envio, $total, $_POST['observacion'], $total_envio);
			if ($guardarpedido > 1) {
				foreach ($cart as $carrito) {
					$totalitem = $carrito['qty'] * $carrito['valor_minorista'];

					$combinacion = $carrito['combinacion'];

					if ($combinacion == "") {
						$combinacion = '';
					} else {
						$valores = getProdAtributosValoresByStock ($combinacion);
						if ($valores != null) { 
							$combinacion = "";
							foreach ($valores as $linea) {
								$combinacion = $combinacion.'<b>'.$linea['atributo'].":</b> ".$linea['nombre'].'<br>';
							}
						} 
					}

					saveDetallePedidos ($guardarpedido, $carrito['idproducto'], $carrito['combinacion'], $combinacion, $carrito['valor_minorista'], $carrito['qty'],'0', $totalitem);
					actualizaStock($carrito['idproducto'], $carrito['combinacion'], $carrito['qty']);
					// actualizaStok($carrito['idproducto'], $carrito['qty']); //funcion para actualizar el stock de los productos
				}
				$tipomensaje = 'success';			   
				// $id_met_pago=0;
				//$mensaje= '<p class="text-center alert alert-success">Los datos fueron actualizados correctamente. Su Numero de pedido es:'.$guardarpedido.'</p>';
				if($id_met_pago==1){
					enviarPagopar($guardarpedido, $total_envio, $total, $id_cliente, $ruc, $_POST['email'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'],
									$_POST['calle'], $_POST['documento'], $_POST['razon_social']);
				}else{
					echo "<script type='text/javascript'>document.location.href='pedido-completado.php?ped=".$guardarpedido."';</script>";
				}
			}	else if ($guardarpedido == null) {
				$tipomensaje = 'error';
				$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Error->"'.$guardarpedido.'"</p>';
			}
			
			$cliente = getCliente($_SESSION['id_cliente']);
			$direccion = getDireccion($_SESSION['id_cliente']);
		} else if ($guardar == null) {
			$tipomensaje = 'error';
			$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
		} else {
			$tipomensaje = 'error';
			$mensaje = '<p class="text-center alert alert-danger">Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
		}
		// var_dump($guardar);
	}
}
?>
<script>
	// calc_env();
</script>

<body onload="calc_env()">
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
		</div>
	</div>
	<!-- Page Info end -->

	<!-- Page -->
	<?php 
	 if (isset($_SESSION['usuario'])) {
		 $cliente = getCliente($_SESSION['id_cliente']);
	 } else {  ?>
			<script type = "text/javascript">
			  window.location = "ingresar.php?redirect=checkout.php"
			</script>
	 <?php }
	 ?>
	<div class="page-area cart-page spad">
		<form class="checkout-form" method="POST">
			<div class="container">
				<?php
					if (isset($mensaje)) {
						echo $mensaje; //mensaje de error
					}
				?>
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<hr>
								<h4 class="checkout-title">1) DATOS DE CLIENTE</h4>
								<hr>
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="nombre" placeholder="Nombre *" value="<?php echo $cliente['nombre'];?>" required>
									</div>
									<div class="col-md-6">
										<input type="text" name="apellido" placeholder="Apellidos *" value="<?php echo $cliente['apellido'];?>" required>
										
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4">
												<input type="text" name="telefono" placeholder="Telefono *" value="<?php echo $cliente['telefono'];?>" required>
											</div>
											<div class="col-md-4">
												<input type="text" name="ruc" placeholder="RUC" value="<?php echo $cliente['ruc'];?>">
											</div>
											<div class="col-md-4">
												<input type="text" name="documento" placeholder="Nro. de CI | RG | DNI" value="<?php echo $cliente['documento'];?>" required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<input type="text" name="razon_social" placeholder="Razon Social" value="<?php echo $cliente['razon_social'];?>">
											</div>
											<div class="col-md-6">
												<input type="email" name="email" placeholder="E-mail *" value="<?php echo $cliente['email'];?>" required>
											</div>
										</div>
										 
										<!-- DIRECCION DE ENVIO - CLIENTE  -->
										<?php 								
											$cli_direccion = getClienteDireccion($_SESSION['id_cliente']);				
										?>
										<!-- /* DIRECCION DE ENVIO - CLIENTE  -->
									</div>
								</div> <!-- .row -->
							</div>	<!-- .col-6 -->

							<div class="col-md-6 col-sm-12">
							<hr>
								<h4 class="checkout-title">2) DIRECCIÓN DE ENVIO</h4>	
								<hr>						
								<!-- //PAIS -->
								<select name="pais" disabled="true">
									<option disabled="true">País *</option>
									<option value="1" selected="true" >Paraguay</option>
								</select>
							<div class="row">
							<div class="col-md-6">
								
								
								<!-- //DEPARTAMENTO -->
								<select name="departamentos" id="departamentos" class="form-control" required>
									<?php if(isset($cli_direccion['departamento']) && $cli_direccion['departamento'] != "" ) { ?>
									<option value="<?php  echo $cli_direccion['departamento']; ?>">
										<?php echo getDepartamento($cli_direccion['departamento'])['nombre'];?>
									</option>
									<?php } ?>									
									
									<option value=''>Seleccione un Departamento *</option>
									<?php											
										$departamentos=getDepartamentos();
										foreach($departamentos as $departamento):
									?>							
										<option value="<?php echo $departamento['id'] ?>"><?php echo $departamento['nombre'] ?></option>
									<?php
										endforeach;
									?>
								</select>	
							</div><!--col md 6 -->
							<div class="col-md-6">
								<!-- //CIUDAD -->
								<select name="ciudades" id="ciudades" class="form-control" required>	
									<?php if (isset($cli_direccion['ciudad']) && $cli_direccion['ciudad'] != '') { ?>
									<option value="<?php  echo $cli_direccion['ciudad']; ?>"> <?php echo getCiudad($cli_direccion['ciudad'])['nombre'];?></option>
									<?php }   ?>
									<option value=''>Seleccione una Ciudad *</option>
									<?php $ciudades=getCiudades($cli_direccion['departamento']);
										foreach($ciudades as $ciudad):
									?>	
										<option value="<?php echo $ciudad['id'] ?>"><?php echo $ciudad['nombre'] ?></option>
									<!-- } -->
									<?php
										endforeach;
									?>									
								</select>
								<!-- //CALLE // DIRECCION -->

														
							</div><!--col md 6 -->
							<div class="col-md-6">
								<input name="calle" value="<?php if(isset($cli_direccion['calle'])) { echo $cli_direccion['calle'];} ?>"type="text" placeholder="Calle o Avenida *" required>
							</div>
							<div class="col-md-6">
								<input name="referencias" value="<?php if(isset($cli_direccion['referencia'])) { echo $cli_direccion['referencia'];} ?>"type="text" placeholder="Referencia *">
							</div>
							</div><!-- row-->
							</div><!-- .col-6 -->
						</div><!-- .row -->
					</div><!-- .col-12-lg -->
				</div><!-- .row -->
						
				<div class="col-12">
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="order-card">
								<div class="order-details">
									<div class="od-warp">	
										<div class="shipping-info">								
											<h4>3) MÉTODO DE ENVIO</h4>
											<p>Seleccione un método de envío</p>
											<?php foreach ($calc_envio as $metodos) { ?>										
												<div class="sc-item">
													<input type="radio" name="calc_envio" id="m<?php echo $metodos['id'] ?>" value="<?php echo $metodos['id'] ?>" <?php if($metodos['default']=='1'){echo "checked";} ?> required>
													<label for="me-<?php echo $metodos['id'] ?>">
													<!--onClick="document.getElementById('totalenvio').innerHTML = '' -->
													<?php echo $metodos['descripcion'] ?>
													<span id="sp-en-<?php echo $metodos['id'] ?>">
													<?php if ($metodos['costo'] == 0) {
														echo "Gratis!";
														$_SESSION['costo_envio'] = 0;
													} else {
														echo number_format($metodos['costo'], 0, ',', '.')." Gs";
														$_SESSION['costo_envio'] = $metodos['costo'];
													}
													?>
													</span></label>

												</div>
											<?php  } ?>							
										</div> <!-- shipping-info -->					
										<!--h4>Cupon code</h4>
										<p>Enter your cupone code</p>
										<div class="cupon-input">
											<input type="text">
											<button class="site-btn">Apply</button>
										</div-->
									</div> <!-- old-wrap -->						
								</div> <!-- order-details -->
							</div> <!-- order-card -->
						</div> <!-- col-6 -->

						<div class="col-md-6 col-sm-12">
							<div class="od-warp">	
								<h4 class="checkout-title">4) RESUMEN DE COMPRA</h4>
								<table class="table order-table">
									<thead>
										<tr>
											<th>Producto</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									if (isset($_SESSION['cart'])) {
										foreach ($_SESSION['cart'] as $cart) { 
									?>											
										<tr>
											<td><?php echo $cart['nombre'] ?></td>
											<td><?php echo number_format($cart['valor_minorista'] *  $cart['qty'], 0, ',', '.')." Gs";?></td>
										</tr>																
									<?php } } ?>
										<tr class="cart-subtotal">
											<td>Envío</td>
											<td id="totalenvio">Gratis</td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="order-total">
											<th>Total</th>
											<?php $total= $_SESSION['total']; ?>
											<th id="total_pago"><?php echo number_format(getTotalCart(), 0, ',', '.')." Gs";?></th>
										</tr>
									</tfoot>
								</table>
								<br>
					<input class="form-control" name="observacion" type="text" placeholder="Observacion sobre el pedido(opcional)">	
				
					<button type="submit" name="guardar" class="site-btn btn-success">Realizar Pedido con PAGOPAR</button>
					<hr>
					<br><br>
							</div> <!-- old-wrap -->
						</div> <!-- col-6 -->
					</div> <!-- row -->
				</div> <!-- col-12 -->
						
				<!-- </div>	?? -->
			</div> <!-- container -->
		<!-- </div>--> <!-- page-area -->

			<!--div class="container">
				<div class="col-12">
					<div class="payment-mt">
						<hr>		
						<h4>METODO DE PAGO</h4>
						<p>Seleccione un metodo de pago</p>
						<p  class="text-success" id="mp-sel"></p>
						<?php //foreach ($met_pagos as $metodos) { ?>										
							<div class="pm-item">
								<input type="radio" name="met_pag" id="<?php //echo $metodos['id'] ?>" value="<?php //echo $metodos['id'] ?>" <?php //if($metodos['default']=='1'){echo "checked";} ?> required>
								<label for=""><?php //echo $metodos['descripcion'] ?></label>
							</div>
						<?php  //} ?>											
					</div>
					
					< <div class="checkbox-items">
						<div class="ci-item">
								<input type="checkbox" name="terminos" id="terminos" required>
								<label for="terminos">Acepto los terminos y condiciones</label>
								<br>
							</div>
						</div>
					</div> >
					
				</div> <!-- col-12 ->
			</div--> <!-- container -->
		</form>
	</div> <!-- page-area -->
	<!-- </div> -->
	<!-- Page -->

	<!-- Footer top section -->	
	<?php include("includes/footer.php");?>

	<script>
	 $(document).ready(function(e){
		calc_env();
		$('input[type=radio][name="met_pag"]').on('change', function() {
	        var id_met= $("input[name='met_pag']:checked").val();
			//alert(id_met);			
	 		$.ajax({
                data: { id: id_met },
                url:   'includes/met_pago.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#mp-sel").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
		}); 

	 	$("#departamentos").change(function(){
	 		var parametros= "id="+$("#departamentos").val();
	 		$.ajax({
                data:  parametros,
                url:   'includes/ciudades.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#ciudades").html(response);
					
                },
                error:function(){
                	alert("error")
                }
            });
	 	});  
		
		$("#ciudades").change(function(){
			calc_env();
	 	});    

		$('input[type=radio][name="calc_envio"]').on('change', function() {
    		//alert(this.value);
			var ttl = <?php echo $total ?>;
			var id_calc_envio =this.value;
			var id_ciudad = document.getElementById("ciudades").value;
	 		$.ajax({
                data: { id: id_calc_envio, id_ciudad: id_ciudad },
                url:   'includes/calc_envio.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#totalenvio").html(response);
					$("#sp-en-"+id_calc_envio+"").html(response);
					$("#total_pago").html((parseFloat(ttl)+parseFloat(response)));
                },
                error:function(){
                	alert("error")
                }
            });
  		});  
    })
</script>

<script>
	function calc_env() {	
		var id_calc_envio = $("input[name='calc_envio']:checked").val();;
		var id_ciudad = document.getElementById("ciudades").value;
		var ttl = <?php echo $total ?>;
		//alert(id_calc_envio);
		//var parametros= "id="+ this.value + " ciu=" + id_ciudad" ";
		//alert(this.parametros);
		$.ajax({
			data: { id: id_calc_envio, id_ciudad: id_ciudad },
			url:   'includes/calc_envio.php',
			type:  'post',
			beforeSend: function () { },
			success:  function (response) {                	
				$("#totalenvio").html(response);
				$("#sp-en-"+id_calc_envio+"").html(response);
				$("#total_pago").html((parseFloat(ttl)+parseFloat(response)));
			},
			error:function(){
				alert("error")
			}
		});
	}

</script>
</body>
</html>