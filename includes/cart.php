<?php


if (isset($_POST['action']) && $_POST['action'] == 'addcart') {
	// $_SESSION['Carrito'] = array();
	$id =$_POST['id'];
		
		//funcion que obtienen datos del producto
		$producto= getProducto($id);
		$imagen= getProdImage($id);
		
		$_SESSION['total'];

		$newitem = array(
			'idproducto' => $id, 
			'referencia' => $producto['referencia'], 
			'nombre' => $producto['nombre'], 
			'descripcion' => $producto['descripcion'], 
			'img_producto' => $imagen['url'], 
			'valor_minorista' =>  $producto['valor_minorista'], 
			'qty' => $_POST['qty'] 
		);

		/*if not empty
		if(!empty($_SESSION['cart']))
		{    
			//and if session cart same 
			if(isset($_SESSION['cart'][$id]) == $id) {
				$_SESSION['cart'][$id]['qty']++;
			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id] = $newitem;
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id] = $newitem;
		}
		*/

		//if not empty
		if(!empty($_SESSION['cart']))
		{    
			//and if session cart same 
			if(isset($_SESSION['cart'][$id]) == $id) {
				$_SESSION['cart'][$id]['qty']++;

				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
				
				if (isset($_SERVER["HTTP_REFERER"])) {
					//header("Location: " . $_SERVER["HTTP_REFERER"]."&addqty=success");
				}

			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id] = $newitem;
				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
				if (isset($_SERVER["HTTP_REFERER"])) {
					if($_SERVER["HTTP_REFERER"]=="http://localhost/tienda/index.php"){
				header("Location: " . $_SERVER["HTTP_REFERER"]."?addnew=success");
				}else{
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addnew=success");
				}
				}
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id] = $newitem;
			$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
			if (isset($_SERVER["HTTP_REFERER"])) {
				if($_SERVER["HTTP_REFERER"]=="http://localhost/tienda/index.php"){
				header("Location: " . $_SERVER["HTTP_REFERER"]."?addcart=success");
				}else{
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addcart=success");
				}
			}
		}
	
	
} else if (isset($_POST['action']) && $_POST['action'] == 'updatecart') {
	$id =$_POST['id'];
	$qty=$_POST['qty'];

	if(isset($_SESSION['cart'][$id]) == $id) {
		$_SESSION['cart'][$id]['qty'] = $_POST['qty'];
	}
} else if(isset($_POST['action']) && $_POST['action'] == 'deletecart') {
	$id =$_POST['id'];
	if(isset($_SESSION['cart'][$id]) == $id) {
		unset($_SESSION['cart'][$id]);
	}
}else{}
?>