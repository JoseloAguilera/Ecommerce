<?php
	$categorias= getAllMenuCategorias();
?>
<header>
<div class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class= "col-md-3">
					<!-- logo -->
					<div class="site-logo">
						<img src="img/logo.png" id="logo" alt="logo" >
					</div>
				</div>

				<div class="col-md-9 menu-area" id="menu">	
					<div class="row">					
						<div class="col-md-8">
							<!-- Search form -->
							<div class="input-group" id="busqueda">
								<input type="text" class="form-control" placeholder="¿Qué está buscando hoy?" id="busqueda-header">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button" onclick="sentSearch()">
										<i class="fa fa-search"></i>
									</button>
								</div><!-- // busqueda-->
							</div><!-- // col-md-8-->	
							
							<div class="social-top">							
								<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
						</div>
					
						<div class="col-md-4 ">
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
					

					<div class="col-md-12">

						<!-- site menu -->
						<!--ul class="main-menu" style="display: block;z-index: 2000;">
								<li><a class="m-activ" href="index.php">Inicio</a></li>
								<?php foreach ($categorias as $cat) { ?>
									<li><a href="categorie.php?cat=<?php echo $cat['id']?>"><?php echo $cat['nombre']?></a></li>
								<?php } ?>							
						</ul-->
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	  <a class="nav-item nav-link " href="index.php">Inicio <span class="sr-only">(current)</span></a>
	  <?php foreach ($categorias as $cat) { ?>
	  	<a class="nav-item nav-link" href="categorie.php?cat=<?php echo $cat['id']?>"><?php echo $cat['nombre']?></a>
	  <?php } ?>
      
    </div>
  </div>
</nav>
					</div>	
				</div>


	</div>

	</div>
</div>

<script>
	function sentSearch() {
		var search = document.getElementById("busqueda-header").value;
		location.replace("categorie.php?search="+search);
	}
	// Get the input field
	var input = document.getElementById("busqueda-header");

	// Execute a function when the user releases a key on the keyboard
	input.addEventListener("keyup", function(event) {
		// Number 13 is the "Enter" key on the keyboard
		if (event.keyCode === 13) {
			// Cancel the default action, if needed
			event.preventDefault();
			// Trigger the button element with a click
			sentSearch();
		}
	});
</script>

</header>
