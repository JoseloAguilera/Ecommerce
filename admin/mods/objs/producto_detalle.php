<?php
	include_once "mods/server/producto.php";
	include_once "mods/server/producto_img.php";
    include_once "mods/server/categoria.php";
	include_once "mods/server/marca.php";
	include_once "mods/server/atributo.php";
	include_once "mods/server/uploads.php";

	if (isset($_SESSION['action'])) {
		if ($_SESSION['action'] == "new") {
			$_SESSION['action'] = "";
			$tipomensaje = 'success';
			$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
		}
	}

	$categorias = getCategorias();
	$categoriasprod = getProdCategorias($_GET['producto']);
	$atributosprod = getProdAtributos($_GET['producto']);
	$atributos = getAllAtributos();
	
	$marcas = getAllMarcas();
    
    $producto = getProducto($_GET['producto']);
	$imagenes = getProdImages ($_GET['producto']);
	$stock = getProductoStock ($_GET['producto']);
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
			$_SESSION['prod_tab'] = "imagenes";
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
			$_SESSION['prod_tab'] = "imagenes";
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
			$_SESSION['prod_tab'] = "imagenes";
		} else if (isset($_POST['guardarpr'])){ 
			// var_dump($_POST['categoria']);
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

			if ($_POST['valorminorista'] > 0) {
				$valorminorista = str_replace(".", "", $_POST['valorminorista']);
			} else {
				$valorminorista = "NULL";
			}

			if ($_POST['valormayorista'] > 0) {
				$valormayorista = str_replace(".", "", $_POST['valormayorista']);
			} else {
				$valormayorista = "NULL";
			}

			if (!isset($_POST['atributo'])){
				$atributo = null;
			} else {
				$atributo = $_POST['atributo'];
			}

			$guardar = saveProducto ($_GET['producto'], $_POST['referencia'], $_POST['nombre'], $_POST['descripcion'], $valorminorista, $valormayorista, $_POST['categoria'], $_POST['marca'], $atributo, $destacado, $activo);
			if ($guardar == $_GET['producto']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				$producto = getProducto($_GET['producto']);
				$categoriasprod = getProdCategorias($_GET['producto']);
				$atributosprod = getProdAtributos($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'success';
				$mensaje = '<h3>Perfecto!</h3><p>No hubo alteración en los datos.</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
			$_SESSION['prod_tab'] = "detalles";
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
		} else if (isset($_POST['nuevostock'])) {
			if ($_POST['valorminorista'] > 0) {
				$valorminorista = str_replace(".", "", $_POST['valorminorista']);
			} else {
				$valorminorista = "NULL";
			}

			if ($_POST['valormayorista'] > 0) {
				$valormayorista = str_replace(".", "", $_POST['valormayorista']);
			} else {
				$valormayorista = "NULL";
			}

			if (!isset($_POST['valores'])) { //producto sin combinación
				$valores = NULL;
			} else {
				$valores = $_POST['valores'];
			}

			$incluir = newStock ($valores, $_GET['producto'], $_POST['stock'], $valorminorista, $valormayorista);
			if (substr($incluir,0,1) == "E") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			} else if ($incluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
				$stock = getProductoStock ($_GET['producto']);
			}
			$_SESSION['prod_tab'] = "stock";
		}
	}
?>