<?php

if (!isset($_SESSION['mayorista'])){
	$_SESSION['mayorista']=0;
}
if (isset($_POST['action']) && $_POST['action'] == 'addcart') {
	// $_SESSION['Carrito'] = array();
	$id =$_POST['id'];
	$qty=$_POST['qty'];
		
		//funcion que obtienen datos del producto
		$producto= getProducto($id);
		$imagen= getProdImage($id);
		
		$_SESSION['total'];
		if($_SESSION['mayorista']==1){
			$precio =  $producto['valor_mayorista'];
		}else{
			$precio =  $producto['valor_minorista'];
		}

		$newitem = array(
			'idproducto' => $id, 
			'referencia' => $producto['referencia'], 
			'nombre' => $producto['nombre'], 
			'descripcion' => $producto['descripcion'], 
			'img_producto' => $imagen['url'], 
			'valor_minorista' =>  $precio, 
			'qty' => $qty
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
				$_SESSION['cart'][$id]['qty']= $_SESSION['cart'][$id]['qty']+$qty;

				//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
				
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addqty=success");
				}

			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id] = $newitem;
				//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addnew=success");
				}
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id] = $newitem;
			if($_SESSION['mayorista']==1){
				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_mayorista'];
			}else{
				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
			}
			//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id]['valor_minorista'];
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]."&addcart=success");
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