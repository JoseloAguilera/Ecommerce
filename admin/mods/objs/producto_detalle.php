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
	$prodAtributos = getProdAllAtributos($_GET['producto']);
	$stock = getProductoStock ($_GET['producto']);
	$lastOrden = getProdImageLO($_GET['producto']);

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['nuevo'])){
			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = "no-image.png";
			} else {
				$extension = substr($_FILES["fileToUpload"]["type"], 6);
				$random_number = mt_rand(10000, 99999);
				$nombre_prod = str_replace(" ", "-", strtolower($producto['nombre']));
				$imgname = $nombre_prod."-".$random_number.".".$extension;
				$img = saveImg ("../img/productos/", $imgname, "fileToUpload");
			}

			if (substr($img,0,3) == substr($nombre_prod, 0, 3) OR $img == "no-image.png") {
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
				$extension = substr($_FILES["fileToUpload"]["type"], 6);
				$random_number = mt_rand(10000, 99999);
				$nombre_prod = str_replace(" ", "-", strtolower($producto['nombre']));
				$imgname = $nombre_prod."-".$random_number.".".$extension;
				$img = saveImg ("../img/productos/", $imgname, "fileToUpload");
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
			$por_pedido= null;
			if(!isset($_POST['por_pedido'])) {
				$por_pedido = 0;
			} else {
				$por_pedido = 1;
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

			$guardar = saveProducto ($_GET['producto'], $_POST['referencia'], $_POST['nombre'], $_POST['descripcion'], $valorminorista, $valormayorista, $_POST['categoria'], $_POST['marca'], $atributo, $destacado, $por_pedido, $activo);
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
			if ($_POST['precio'] > 0) {
				$precio = str_replace(".", "", $_POST['precio']);
			} else {
				$precio = "NULL";
			}

			if ($_POST['descuento'] > 0) {
				$descuento = str_replace(".", "", $_POST['descuento']);
			} else {
				$descuento = "NULL";
			}

			if (!isset($_POST['valores'])) { //producto sin combinación
				$valores = "NULL";
			} else {
				$valores = $_POST['valores'];
			}

			$incluir = newStock ($valores, $_GET['producto'], $_POST['stock'], $precio, $descuento);
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
				$producto = getProducto($_GET['producto']);
			}
			$_SESSION['prod_tab'] = "stock";
		} else if (isset($_POST['guardarstock'])){ 
			if ($_POST['precio'] > 0) {
				$precio = str_replace(".", "", $_POST['precio']);
			} else {
				$precio = "NULL";
			}

			if ($_POST['descuento'] > 0) {
				$descuento = str_replace(".", "", $_POST['descuento']);
			} else {
				$descuento = "NULL";
			}

			if (!isset($_POST['valores'])) { //producto sin combinación
				$valores = NULL;
			} else {
				$valores = $_POST['valores'];
			}

			$guardar = saveStock ($_POST['codigo'], $_POST['stock'], $precio, $descuento);
			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				
				$stock = getProductoStock ($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
			$_SESSION['prod_tab'] = "stock";

		} else if (isset($_POST['excluirstock'])){
			$excluir = deleteStock ($_POST['codigo']);

			if ($excluir == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron eliminados correctamente.</p>';
				
				$stock = getProductoStock ($_GET['producto']);
			} else if ($excluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$excluir.'"</p>';
			}
		} else if (isset($_POST['nuevoatributo'])) {

			$incluir = newProdAtributo ($_GET['producto'], $_POST['atributo']);
			if (substr($incluir,0,1) == "E") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			} else if ($incluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			}
			$_SESSION['prod_tab'] = "stock";
		} else if (isset($_POST['guardaratributo'])){ 
			$activo = null;
			if(!isset($_POST['activo'])) {
				$activo = 0;
			} else {
				$activo = 1;
			}

			$guardar = saveProdAtributo ($_POST['codigo'], $activo);

			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
		} else if (isset($_POST['excluiratributo'])){
			$excluir = deleteProdAtributo ($_POST['codigo']);

			if ($excluir == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron eliminados correctamente.</p>';
				
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			} else if ($excluir == "**stock**") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Stock con combinación encontrado!<br>Atributo no pudo ser eliminado, favor eliminar stock primero.</p>';
			} else if ($excluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$excluir.'"</p>';
			}
		} else if (isset($_POST['nuevovlr'])) {
			$incluir = newProdAtributoValor ($_POST['valor'], $_POST['codigo']);
			if (substr($incluir,0,1) == "E") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			} else if ($incluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			}
			$_SESSION['prod_tab'] = "stock";
		} else if (isset($_POST['guardarvlr'])){ 
			$activo = null;
			if(!isset($_POST['activo'])) {
				$activo = 0;
				$menu = 0;
			} else {
				$activo = 1;
			}

			$guardar = saveProdAtributoValor ($_POST['codigo'], $activo);

			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
			$_SESSION['prod_tab'] = "stock";
		} else if (isset($_POST['excluirvlr'])){
			$excluir = deleteProdAtributoValor ($_POST['codigo']);

			if ($excluir == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron eliminados correctamente.</p>';
				
				$prodAtributos = getProdAllAtributos($_GET['producto']);
			} else if ($excluir == "**stock**") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Stock con combinación encontrado!<br>Valor no pudo ser eliminado, favor eliminar stock primero.</p>';
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