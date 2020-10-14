<?php


if (isset($_GET['action']) && $_GET['action'] == 'addcart') {
	// $_SESSION['Carrito'] = array();
	
		$id =$_GET['id'];
		//funcion que obtienen datos del producto
		$producto= getProducto($id);
		$imagen= getProdImage($id);

		$newitem = array(
			'idproducto' => $id, 
			'referencia' => $producto['referencia'], 
			'nombre' => $producto['nombre'], 
			'descripcion' => $producto['descripcion'], 
			'img_producto' => $imagen['url'], 
			'valor_minorista' =>  $producto['valor_minorista'], 
			'qty' => '1' 
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
			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id] = $newitem;
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id] = $newitem;
		}
	
	
}

?>