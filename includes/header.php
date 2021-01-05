<?php
	$categorias= getAllMenuCategorias();
?>
<header>
<div class="container-fluid d-xs-block d-sm-block d-md-none" style="<?php if ($index==1){ echo "position:fixed;";}?>z-index:999; background: #28282863;" id="menu-top1">
	<div class="row">
		<div class="container"  >
			<div class="row justify-content-center">
				<div class= "align-self-center">
					<!-- logo -->
					<div class="site-logo">
						<a href="index.php"><img src="img/logo.png" id="logo" alt="logo" ></a>
					</div>
					<!--div class="social-top d-xs-block d-sm-block d-md-none pull-right">
						<br>							
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div-->
				</div>
				<div class="align-self-center">
									<div class="" style="margin-top: 10px;">								
										<div class="header-right">		
											<?php
												if (!isset($_SESSION['usuario'])){
											?>			
												<a href="ingresar.php" class="user-menu register" style="margin-right: 10px;"> <i class="fa fa-user-o" aria-hidden="true"></i>Ingresar</a>
												<span class="user-menu register" style="margin-right: 10px;">|</span>
												<a href="registrar.php" class="user-menu register" style="margin-left: 0px;"> Registrarme</a>
											<?php } else { ?>
												<a href="perfil.php" class="user-menu register" style="margin-right: 10px;"> <i class="fa fa-user-o" aria-hidden="true"></i><?php echo $_SESSION['usuario'];?></a>
												<span class="user-menu register" style="margin-right: 10px;"> | </span>
												<a href="salir.php" class="user-menu register" style="margin-left: 0px;">Salir</a>
											<!--div class="carrito"-->
											<?php } ?>
											<a href="cart.php" class="card-bag"><img src="img/icons/bag.png" alt=""><span><?php echo countCart(); ?></span></a>
										</div> <!-- header-right-->								
									</div><!-- // end-->
								
				</div><!-- // col-md-4-->
				
				<div class="col-md-9 col-sm-12 menu-area" id="menu">	
				
					<div class="align-self-center">
							<!-- Search form -->
							<div class="input-group" id="busqueda" style="width:78%;">
								<input type="text" class="form-control" placeholder="¿Qué está buscando hoy?" id="busqueda-header-sm">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button" onclick="sentSearchSm()">
										<i class="fa fa-search"></i>
									</button>
								</div><!-- // busqueda-->
							</div><!-- // col-md-8-->	
							
							<div class="">							
							<a href="">
						<span class="instagram">
					<span class="fa fa-instagram"></span>
						</span>
						</a>
							</div>
						</div>

					
				</div> <!-- col-md-9 menu-area -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- row -->
</div> <!-- container-fluid -->


<div class="container-fluid d-none d-lg-block d-md-block" style="<?php if (isset($index)==1){ echo "position:fixed;";}?> z-index:999;background: #28282863;padding:0;" id="menu-top">
	<div class="row">
		<div class="container"  >
			<div class="row">
				<div class= "col-md-3 col-sm">
					<!-- logo -->
					<div class="site-logo">
						<a href="index.php"><img src="img/logo.png" id="logo" alt="logo" ></a>
					</div>
					<!--div class="social-top d-xs-block d-sm-block d-md-none pull-right">
						<br>							
						<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div-->
				</div>

				<div class="col-md-9 col-sm-12 menu-area" id="menu">	
					<div class="row">					
						<div class="col-md-8 col-sm-12">
							<!-- Search form -->
							<div class="input-group" id="busqueda">
								<input type="text" class="form-control" placeholder="¿Qué está buscando hoy?" id="busqueda-header-lg">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button" onclick="sentSearchLg()">
										<i class="fa fa-search"></i>
									</button>
								</div><!-- // busqueda-->
							</div><!-- // col-md-8-->	
							
							<div class="social-top">							
							<a href="">
						<span class="instagram">
					<span class="fa fa-instagram"></span>
						</span>
						</a>
							</div>
						</div>
					
						<div class="col-md-4 col-sm-12">
							<div class="row">
								<div class="col-2"  >
									
								</div><!-- // col-2-->
								<div class="col-10 col-md-12">
									<div class="" style="margin-top: 10px;">								
										<div class="header-right">		
											<?php
												if (!isset($_SESSION['usuario'])){
											?>			
												<a href="ingresar.php" class="user-menu register" style="margin-right: 10px;"> <i class="fa fa-user-o" aria-hidden="true"></i>Ingresar</a>
												<span class="user-menu register" style="margin-right: 10px;">|</span>
												<a href="registrar.php" class="user-menu register" style="margin-left: 0px;"> Registrarme</a>
											<?php } else { ?>
												<a href="perfil.php" class="user-menu register" style="margin-right: 10px;"> <i class="fa fa-user-o" aria-hidden="true"></i><?php echo $_SESSION['usuario'];?></a>
												<span class="user-menu register" style="margin-right: 10px;"> | </span>
												<a href="salir.php" class="user-menu register" style="margin-left: 0px;">Salir</a>
											<!--div class="carrito"-->
											<?php } ?>
											<a href="cart.php" class="card-bag"><img src="img/icons/bag.png" alt=""><span><?php echo countCart(); ?></span></a>
										</div> <!-- header-right-->								
									</div><!-- // end-->
								</div><!-- // cpol-md-12-->
							</div><!-- // row-->
						</div><!-- // col-md-4-->
					</div><!-- //row -->

				
				</div> <!-- col-md-9 menu-area -->
			</div> <!-- row -->
		</div> <!-- container -->
	</div> <!-- row -->
</div> <!-- container-fluid -->
<script>
	function sentSearchLg() {
		var search = document.getElementById("busqueda-header-lg").value;
		location.replace("categorie.php?search="+search);
	}

	function sentSearchSm() {
		var search = document.getElementById("busqueda-header-sm").value;
		location.replace("categorie.php?search="+search);
	}
	// Get the input field
	var inputLG = document.getElementById("busqueda-header-lg");

	// Execute a function when the user releases a key on the keyboard
	inputLG.addEventListener("keyup", function(event) {
		// Number 13 is the "Enter" key on the keyboard
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			// Trigger the button element with a click
			sentSearchLg();
		}
	});

	// Get the input field
	var input = document.getElementById("busqueda-header-sm");

	// Execute a function when the user releases a key on the keyboard
	input.addEventListener("keyup", function(event) {
		// Number 13 is the "Enter" key on the keyboard
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			// Trigger the button element with a click
			sentSearchSm();
		}
	});
</script>

</header>
