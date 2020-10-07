<?php
	include_once "mods/server/producto.php";
	include_once "mods/server/producto_img.php";
    include_once "mods/server/categoria.php";
    include_once "mods/server/marca.php";
	include_once "mods/server/uploads.php";

	if (isset($_SESSION['action'])) {
		if ($_SESSION['action'] == "new") {
			$_SESSION['action'] = "";
			$tipomensaje = 'success';
			$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
		}
	}

    $categorias = getCategorias();
    $marcas = getAllMarcas();
    
    $producto = getProducto($_GET['producto']);
    $imagenes = getProdImages ($_GET['producto']);
	$lastOrden = getProdImageLO($_GET['producto']);

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['nuevo'])){
			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = "no-image.png";
			} else {
				$imgname = "cod".$_GET['producto']."-".date("Y-m-d")."-".basename($_FILES["fileToUpload"]["name"]);
				$img = saveImg ("img/productos/", $imgname, "fileToUpload");
			}

			if (substr($img,0,3) == "cod" OR $img == "no-image.png") {
				$activo = null;
				if(!isset($_POST['activo'])) {
					$activo = 0;
				} else {
					$activo = 1;
				}
				$incluir = newProdImage ($img, $_GET['producto'], $_POST['orden'], $activo);

				if ($incluir == $img) {
					$tipomensaje = 'success';
					$mensaje= '<h3>Perfecto!</h3><p>Las imagenes fueran insertadas correctamente.</p>';
					$imagenes = getProdImages ($_GET['producto']);
	                $lastOrden = getProdImageLO($_GET['producto']);
				} else if ($incluir == null) {
					$tipomensaje = 'error';
					$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
				} else {
					$tipomensaje = 'error';
					$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
				}
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>'.$img.'</p>';
			}
		} else if (isset($_POST['excluir'])){
			$codigo =  $_POST['codigo'];
			$excluir = deleteProdImage ($codigo);

			if ($excluir == $codigo) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>La imagen fue eliminada correctamente.</p>';
				$imagenes = getProdImages ($_GET['producto']);
	            $lastOrden = getProdImageLO($_GET['producto']);
			} else if ($excluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$excluir.'"</p>';
			}
		} else if (isset($_POST['guardar'])){
			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = $_POST['imgurl'];
			} else {
				$imgname = "cod".$_GET['producto']."-".date("Y-m-d")."-".basename($_FILES["fileToUpload"]["name"]);
				$img = saveImg ("img/productos/", $imgname, "fileToUpload");
			}

			$activo = null;
			if(!isset($_POST['activo'])) {
				$activo = 0;
			} else {
				$activo = 1;
			}
			$guardar = saveProdImage ($_POST['codigo'], $img, $_POST['orden'], $activo);
			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				$imagenes = getProdImages ($_GET['producto']);
	            $lastOrden = getProdImageLO($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'success';
				$mensaje = '<h3>Perfecto!</h3><p>No hubo alteración en los datos.</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
		} else if (isset($_POST['guardarpr'])){ 
			$activo = null;
			if(!isset($_POST['activo'])) {
				$activo = 0;
			} else {
				$activo = 1;
			}
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

			$guardar = saveProducto ($_POST['codigo'], $_POST['nombre'], $_POST['descripcion'], $_POST['estoque'], $precio, $cuota, $valor, $precio_mayorista, $cuota_mayorista, $valor_mayorista, $_POST['categoria'], $_POST['marca'], $destacado, $activo);
			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				$producto = getProducto($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'success';
				$mensaje = '<h3>Perfecto!</h3><p>No hubo alteración en los datos.</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
		} else if (isset($_POST['excluirpr'])){
			$excluir = deleteProducto ($_POST['codigo']);

			if ($excluir == $_POST['codigo']) {
				$_SESSION['action'] = "drop";
				echo "<script type='text/javascript'>document.location.href='producto.php';</script>";
			} else if ($excluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$excluir.'"</p>';
			}
		} 
	}
?>