<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="../img/logo.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $_SESSION['nome_usuario'];?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<?php 
			$inicio = "";

			$catastro = "";
			$subcliente1 = "";
			$subcliente2 = "";			
			$subcategoria1 = "";
			$subcategoria2 = "";
			$submarca1 = "";
			$submarca2 = "";
			$subatributo1 = "";
			$subatributo2 = "";
			$subproducto1 = "";
			$subproducto2 = "";

			$ecommerce = "";
			$subbanner1 = "";
			$subbanner2 = "";
			$subpedidos1 = "";
			$subpedidos2 = "";

			$configuraciones = "";
			$subusuario1 = "";
			$subusuario2 = "";
			$subinfo1 = "";
			$subinfo2 = "";

			$reportes = "";

			if (strpos($_SERVER['REQUEST_URI'], 'cliente.php') !== false){
				$catastro = "active";
				$subcliente1 = "active";
				$subcliente2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'categoria.php') !== false){
				$catastro = "active";
				$subcategoria1 = "active";
				$subcategoria2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'marca.php') !== false){
				$catastro = "active";
				$submarca1 = "active";
				$submarca2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'atributo.php') !== false){
				$catastro = "active";
				$subatributo1 = "active";
				$subatributo2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'producto.php') !== false OR strpos($_SERVER['REQUEST_URI'], 'producto_detalle.php') !== false){
				$catastro = "active";
				$subproducto1 = "active";
				$subproducto2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'pedido.php') !== false OR strpos($_SERVER['REQUEST_URI'], 'pedido_detalle.php') !== false){
				$ecommerce = "active";
				$subpedidos1 = "active";
				$subpedidos2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'banner.php') !== false){
				$ecommerce = "active";
				$subbanner1 = "active";
				$subbanner2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'usuario.php') !== false){
				$configuraciones = "active";
				$subusuario1 = "active";
				$subusuario2 = "text-aqua";
			} else if (strpos($_SERVER['REQUEST_URI'], 'informaciones.php') !== false){
				$configuraciones = "active";
				$subinfo1 = "active";
				$subinfo2 = "text-aqua";
			} else {
				$inicio = "active";
			}
		?>
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">Menu de Navegación</li>
			<li class="<?php echo $inicio;?>">
				<a href="index.php">
					<i class="fa fa-home"></i> <span>Inicio</span>
				</a>
			</li>
			<li class="<?php echo $catastro;?> treeview">
				<a href="#">
					<i class="fa fa-pencil"></i> <span>Catastros</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $subcliente1;?>"><a href="cliente.php"><i class="fa fa-circle-o <?php echo $subcliente2;?>"></i> Clientes</a></li>
					<li class="<?php echo $subcategoria1;?>"><a href="categoria.php"><i class="fa fa-circle-o <?php echo $subcategoria2;?>"></i> Categoria</a></li>
					<li class="<?php echo $submarca1;?>"><a href="marca.php"><i class="fa fa-circle-o <?php echo $submarca2;?>"></i> Marca</a></li>
					<li class="<?php echo $subatributo1;?>"><a href="atributo.php"><i class="fa fa-circle-o <?php echo $subatributo2;?>"></i> Atributos</a></li>
					<li class="<?php echo $subproducto1;?>"><a href="producto.php"><i class="fa fa-circle-o <?php echo $subproducto2;?>"></i> Productos</a></li>
				</ul>
			</li>
			<li class="<?php echo $ecommerce;?> treeview">
				<a href="#">
					<i class="fa fa-laptop"></i> <span>E-commerce</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li class="<?php echo $subbanner1;?>"><a href="banner.php"><i class="fa fa-circle-o <?php echo $subbanner2;?>"></i> Banners</a></li>
					<li class="<?php echo $subpedidos1;?>"><a href="pedido.php"><i class="fa fa-circle-o <?php echo $subpedidos2;?>"></i> Pedidos</a></li>
				</ul>
			</li>
			<!-- <li class="<?php echo $reportes;?> treeview">
				<a href="#">
					<i class="fa fa-bar-chart"></i> <span>Reportes</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					
				</ul>
			</li> -->
			<?php
				if ($_SESSION['tipo'] == 0) {
			?>
			<li class="<?php echo $configuraciones;?> treeview">
				<a href="#">
					<i class="fa fa-gear"></i> <span>Configuraciones</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<!-- <li class="<?php echo $subinfo1;?>"><a href="usuario.php"><i class="fa fa-circle-o <?php echo $subinfo2;?>"></i> Informaciones</a></li> -->
					<li class="<?php echo $subusuario1;?>"><a href="usuario.php"><i class="fa fa-circle-o <?php echo $subusuario2;?>"></i> Usuario</a></li>
				</ul>
			</li>
			<?php
				}
			?>
		</ul>
	</section>
<!-- /.sidebar -->
</aside>