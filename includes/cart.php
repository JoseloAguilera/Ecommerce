<?php

if (!isset($_SESSION['mayorista'])){
	$_SESSION['mayorista']=0;
}
if (isset($_POST['action']) && $_POST['action'] == 'addcart') {
	// $_SESSION['Carrito'] = array();
	$id =$_POST['id'];
	$qty=$_POST['qty'];
	$combinacion = "";
		//funcion que obtienen datos del producto
		$producto= getProducto($id);
		$imagen= getProdImage($id);
		if (isset($_POST['atributo'])) {
			$combinacion = buscaCombinacion($_POST['atributo']); 
			if($_SESSION['mayorista']==1){
				$precio =  $_POST['valor_mayorista'];
			}else{
				$precio =  $_POST['valor_minorista'];
			}
	
		} else {
			$combinacion = "";
			if($_SESSION['mayorista']==1){
				$precio =  $producto['valor_mayorista'];
			}else{
				$precio =  $producto['valor_minorista'];
			}
		}
		
		$_SESSION['total'];

		$newitem = array(
			'idproducto' => $id, 
			'combinacion' => $combinacion, 
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
			if(isset($_SESSION['cart'][$id."-".$combinacion]) == $id) {
				$_SESSION['cart'][$id."-".$combinacion]['qty']++;
			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id."-".$combinacion] = $newitem;
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id."-".$combinacion] = $newitem;
		}
		*/

		//if not empty
		if(!empty($_SESSION['cart']))
		{    
			//and if session cart same 
			if(isset($_SESSION['cart'][$id."-".$combinacion]) == $id) {
				$_SESSION['cart'][$id."-".$combinacion]['qty']= $_SESSION['cart'][$id."-".$combinacion]['qty']+$qty;

				//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id."-".$combinacion]['valor_minorista'];
				
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addqty=success");
				}

			} else { 
				//if not same put new storing
				$_SESSION['cart'][$id."-".$combinacion] = $newitem;
				//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id."-".$combinacion]['valor_minorista'];
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]."&addnew=success");
				}
			}
		} else  {
			$_SESSION['cart'] = array();
			$_SESSION['cart'][$id."-".$combinacion] = $newitem;
			if($_SESSION['mayorista']==1){
				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id."-".$combinacion]['valor_mayorista'];
			}else{
				$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id."-".$combinacion]['valor_minorista'];
			}
			//$_SESSION['total'] = $_SESSION['total'] + $_SESSION['cart'][$id."-".$combinacion]['valor_minorista'];
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]."&addcart=success");
			}
		}
	
	
} else if (isset($_POST['action']) && $_POST['action'] == 'updatecart') {
	$id =$_POST['id'];
	$qty=$_POST['qty'];
	$combinacion = $_POST['combinacion'];

	if(isset($_SESSION['cart'][$id."-".$combinacion]) == $id) {
		$_SESSION['cart'][$id."-".$combinacion]['qty'] = $_POST['qty'];
	}
} else if(isset($_POST['action']) && $_POST['action'] == 'deletecart') {
	$id =$_POST['id'];
	$combinacion = $_POST['combinacion'];
	if(isset($_SESSION['cart'][$id."-".$combinacion]) == $id) {
		unset($_SESSION['cart'][$id."-".$combinacion]);
	}
}else{}
?>