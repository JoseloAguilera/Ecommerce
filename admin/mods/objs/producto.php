<?php
	include_once "mods/server/producto.php";
    include_once "mods/server/categoria.php";
    include_once "mods/server/marca.php";

	if (isset($_SESSION['action'])) {
		if ($_SESSION['action'] == "drop") {
			$_SESSION['action'] = "";
			$tipomensaje = 'success';
			$mensaje= '<h3>Perfecto!</h3><p>El producto fue eliminado correctamente.</p>';
		}
    }
    
	$productos = getAllProductos();
	$categorias = getCategorias();
	$marcas = getAllMarcas();
    
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['nuevo'])){
			$activo = 1;
			$destacado = null;
			if(!isset($_POST['destacado'])) {
				$destacado = 0;
			} else {
				$destacado = 1;
			}

			if ($_POST['valor'] > 0) {
				$valor = str_replace(".", "", $_POST['valor']);
			} else {
				$valor = "NULL";
			}
			if ($_POST['cuota'] > 0) {
				$cuota = str_replace(".", "", $_POST['cuota']);
			} else {
				$cuota = "NULL";
			}
			if ($_POST['precio'] > 0) {
				$precio = str_replace(".", "", $_POST['precio']);
			} else {
				$precio = "NULL";
			}

			if ($_POST['valor_mayorista'] > 0) {
				$valor_mayorista = str_replace(".", "", $_POST['valor_mayorista']);
			} else {
				$valor_mayorista = "NULL";
			}
			if ($_POST['cuota_mayorista'] > 0) {
				$cuota_mayorista = str_replace(".", "", $_POST['cuota_mayorista']);
			} else {
				$cuota_mayorista = "NULL";
			}
			if ($_POST['precio_mayorista'] > 0) {
				$precio_mayorista = str_replace(".", "", $_POST['precio_mayorista']);
			} else {
				$precio_mayorista = "NULL";
			}
			
			$incluir = newProducto ($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['estoque'], $precio, $cuota, $valor, $precio_mayorista, $cuota_mayorista, $valor_mayorista, $_POST['categoria'], $_POST['marca'], $destacado, $activo);
			
			if ($incluir == $_POST['codigo']) {
				$_SESSION['action'] = "new";
				echo "<script type='text/javascript'>document.location.href='producto_detalle.php?producto=".$incluir."';</script>";
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			}
		} 
	}
?>