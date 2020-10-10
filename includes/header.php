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

				<div class="col-md-9 menu-area">		
					
					<div class="row">					
						<div class="col-md-8">
							<!-- Search form -->
							<div class="input-group" id="busqueda">
								<input type="text" class="form-control" placeholder="¿Qué está buscando hoy?">
									<div class="input-group-append">
									<button class="btn btn-secondary" type="button">
									<i class="fa fa-search"></i>
								</button>
								</div>
							</div>	
							
							<div class="social-top">							
								<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</div>
						</div>
					
					<div class="col-md-4">
						<div class="" style="margin-top: 10px;">
								<div class="header-right">					
									<a href="/register" class="user-menu register"> <i class="fa fa-user-o" aria-hidden="true"></i>Ingresar | Registrarme</a>			
									<!--div class="carrito"-->
									<a href="cart.php" class="card-bag"><img src="img/icons/bag.png" alt=""><span>2</span></a>
								</div>
							</div>
						</div>
					
					</div>
					

					<div class="col-md-12">
						<!-- responsive -->
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>		


							<!--div class="search-form">
							<form class="form-inline my-2 my-lg-0 ">
								<input class="form-control" type="search">
								<button class="btn btn-success " type="submit"> <img src="img/icons/search.png" alt=""> Buscar</button>
								</form>
						</div-->
						<!-- site menu -->
						<ul class="main-menu">
								<li><a class="m-activ" href="index.php">Inicio</a></li>
								<?php foreach ($categorias as $cat) { ?>
									<li><a href="categorie.php?id=<?php echo $cat['id']?>"><?php echo $cat['nombre']?></a></li>
								<?php } ?>
								
								
						</ul>

			


			
		
                        <!--end of col-->
					</div>	
				</div>


	</div>

	</div>
</div>
</header>
