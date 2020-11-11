<?php
	include_once "conn.php";
	
	function getAllMenuCategorias () {
		$connection = conn();
		$sql = "SELECT * FROM tb_categoria WHERE activo = '1' AND menu='1'";
		$query = $connection->prepare($sql);
		$query->execute();
	
		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}
	
		$connection = disconn($connection);
		return $result;
	}
	
	function getAllProductosHome () {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto ORDER BY id ASC LIMIT 12";
		$query = $connection->prepare($sql);
		$query->execute();
	
		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}
	
		$connection = disconn($connection);
		return $result;
	}



	function getProductosDestacados () {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.destaque = '1' AND tb_producto.activo = '1' ORDER BY RAND() LIMIT 12";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	function getProductosNuevos() {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto ORDER BY id DESC LIMIT 12";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

    function getProducto ($codigo) {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.id = '$codigo'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getProdImages ($producto) {
		$connection = conn();
		$sql = "SELECT * FROM tb_producto_img WHERE tb_producto_img.id_producto = '$producto' ORDER BY orden DESC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getProdImage ($producto) {
		$connection = conn();
		$sql = "SELECT * FROM tb_producto_img WHERE tb_producto_img.id_producto = '$producto'  ORDER BY orden DESC LIMIT 1";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getCategorias () {
		$connection = conn();
		$sql = "SELECT * FROM tb_categoria WHERE id_padre IS NULL ORDER BY nombre ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getSubCategorias ($categoria) {
		$connection = conn();
		$sql = "SELECT * FROM tb_categoria WHERE id_padre = '$categoria' ORDER BY nombre ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getCategoria ($categoria) {
		$connection = conn();
		$sql = "SELECT * FROM tb_categoria WHERE id = '$categoria' ";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	
	function getProdbyCategoria ($categoria) {
		$connection = conn();
		if($categoria != 'ALL') {
			$sql = "SELECT tb_producto_categoria.*, tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto_categoria 
					LEFT JOIN tb_producto ON tb_producto_categoria.id_producto=tb_producto.id 
					LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id 
					WHERE tb_producto.activo = 1 AND (tb_producto_categoria.id_categoria = '$categoria' OR tb_producto_categoria.id_categoria IN (SELECT id FROM tb_categoria WHERE id_padre = '$categoria')) GROUP BY (tb_producto.id) ORDER BY nombre ASC";
		} else {
			$sql = "SELECT tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id WHERE tb_producto.activo = 1 AND tb_producto.id_categoria IN (SELECT id FROM tb_categoria WHERE tb_categoria.activo = 1) ORDER BY nombre ASC";
		}
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getProdbySearch ($busca) {
		$connection = conn();
		$sql = "SELECT tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto
		LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id 
		WHERE (tb_producto.nombre LIKE '%$busca%' AND tb_producto.activo = 1) AND tb_producto.activo = 1 ORDER BY nombre ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function newUsuario ($nombre, $apellido, $email, $contrasena) {
		$connection = conn();
		try {
			$sql = "INSERT INTO tb_cliente (nombre, apellido, mayorista)
		 			VALUES ('$nombre', '$apellido', 0)";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$id_cliente = $connection->lastInsertId();

				$sql = "INSERT INTO tb_usuario_cliente (id_cliente, email, contrasena, creado_en)
		 			VALUES ('$id_cliente', '$email', '$contrasena', NOW())";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $id_cliente;
				} else {
					$result = null;
				}	
			} else {
				$result = null;
			}
		} catch (\Exception $e) {
			$result = "Erro ->".$e;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getUsuario ($email, $contrasena) {
		$connection = conn();

		$sql= "SELECT tb_usuario_cliente.*, tb_cliente.* from tb_usuario_cliente 
		LEFT JOIN tb_cliente ON tb_usuario_cliente.id_cliente = tb_cliente.id 
		WHERE tb_usuario_cliente.email = '$email' AND contrasena = '$contrasena'";

		$query= $connection->prepare($sql);
		$query->execute();
		$result = null;

		if ($query->rowCount() > 0) {
			$result = $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);

		return $result;
	}

	function getClienteDireccion($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_cli_direccion WHERE id_cliente = '$id' LIMIT 1";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function countCart() {
		$total=0;
		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $counter) { 				
				$total++;		
			}
			$_SESSION['total_item_cart'] = $total;
			return $total;
		} else {
			return $total;
		}
		
	}
	
	function getMetodosDePago() {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_pago ORDER BY id ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getMetodoEnvio($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_envio WHERE id = '$id'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getMetodoPago($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_pago WHERE id = '$id'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	
	function getMetodosDeEnvio() {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_envio ORDER BY id ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getTotalCart(){
		$total=0;
		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $TotalProducto) { 					
				$TotalItem = $TotalProducto['qty']*$TotalProducto['valor_minorista'];
				$total = $total + $TotalItem;
				$_SESSION['total'] = $total;
			}
			if ($_SESSION['total_item_cart'] == 0) {
				$_SESSION['total'] = 0;
				unset($_SESSION['cart']);
			}
		} else {
			$_SESSION['total'] = 0;
		}
		return $_SESSION['total'];
	}

	function getDepartamentos() {
		$connection = conn();
		$sql = "SELECT * FROM tb_departamento ORDER BY id ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
    }
    
    function getDepartamento($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_departamento WHERE id = '$id' LIMIT 1	";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getCiudades($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_ciudad WHERE id_departamento = '$id' ORDER BY id ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
    }
    
    function getCiudad($id) {
		$connection = conn();
		$sql = "SELECT * FROM tb_ciudad WHERE id = '$id' LIMIT 1";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getCliente ($id) {
		$connection = conn();
        $sql = "SELECT * FROM tb_cliente 
                WHERE tb_cliente.id = $id";
        
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	
	function getDireccion ($id) {
		$connection = conn();
        $sql = "SELECT * FROM tb_cli_direccion 
                WHERE tb_cli_direccion.id_cliente = $id";
        
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	
	function saveCliente ($id, $nombre, $apellido, $tipodoc, $nrodoc, $razonsocial, $telefono, $email, $depart, $ciudad, $calle, $referencias) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_cliente WHERE id = '$id'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_cliente SET nombre = '$nombre', nombre = '$nombre', apellido = '$apellido', tipo_documento = '$tipodoc', nro_documento = '$nrodoc', razon_social = '$razonsocial', telefono = '$telefono', email = '$email'
	 					WHERE id = '$id'";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $id;
				} else {
					$result = $id; //Sem alteração
				}

				if ($result == $id) {
					$direccion = saveCliDireccion ($id, $depart, $ciudad, $calle, $referencias);

					if ($direccion == $id ) {
						$result = $id;
					} else {
						$result = 'Erro al guardar la direccion del cliente.';
					}
				} else {
					$result = 'Erro al guardar los datos del cliente.';
				}
			} else {
				$result = null;
			}			
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
    }

	function saveCliDireccion ($id, $depart, $ciudad, $calle, $referencias) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_cli_direccion WHERE id_cliente = '$id'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_cli_direccion SET departamento = '$depart', ciudad = '$ciudad', calle = '$calle', referencia = '$referencias'
	 					WHERE tb_cli_direccion.id_cliente = '$id'";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $id;
				} else {
					$result = $id; //Sem alteração
				}
			} else {
				$sql = "INSERT INTO tb_cli_direccion (id_cliente, departamento, ciudad, calle, referencia, favorito)
		 			VALUES ('$id', '$depart', '$ciudad', '$calle', '$referencias', 1)";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $id;
				} else {
					$result = null;
				}
			}			
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
    }
    
    function savePedidos ($id, $id_met_pago, $id_met_envio, $total, $observacion, $total_envio){
		$connection = conn();
		try {
                $sql = "INSERT INTO tb_pedido (id_cliente, id_met_pago, id_met_envio, total, observacion, total_envio)
		 			VALUES ('$id', '$id_met_pago', '$id_met_envio','$total', '$observacion', '$total_envio')";
				$query = $connection->prepare($sql);
                $query->execute();
                $id_ult_pd= $connection->lastInsertId();

				if ($query->rowCount() > 0) {
					$result = $id_ult_pd;
				} else {
					$result = null;
           } 
                       
						
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
    }
 
    function saveDetallePedidos ($id_pedido, $id_producto, $valor_unitario, $ctd, $descuento, $valor_total) {
		$connection = conn();
		try {
			$sql = "INSERT INTO tb_ped_detalle (id_pedido, id_producto, valor_unitario, ctd, descuento, valor_total)
				VALUES ('$id_pedido', '$id_producto', '$valor_unitario', '$ctd', '$descuento', '$valor_total')";
			$query = $connection->prepare($sql);
			$query->execute();
			
			if ($query->rowCount() > 0) {
				$result = $id_pedido;
			} else {
				$result = null;
			}                	
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function getMetEnvioCiudad($id_met_envio, $id_ciudad) {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_envio_costo WHERE id_met_envio = '$id_met_envio' AND id_ciudad = '$id_ciudad' LIMIT 1";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getMetodosDeEnvioDefault($id_met_envio) {
		$connection = conn();
		$sql = "SELECT * FROM tb_met_envio WHERE id = '$id_met_envio' LIMIT 1";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getPedidosbyCliente ($id_cliente) {
		$connection = conn();
		$sql = "SELECT tb_pedido.*, tb_cliente.nombre, tb_cliente.apellido, tb_met_pago.descripcion AS MET_PAGO, tb_met_envio.descripcion AS MET_ENVIO, tb_ped_status.descripcion AS STATUS_PED FROM tb_pedido
                LEFT JOIN tb_cliente ON tb_pedido.id_cliente = tb_cliente.id 
                LEFT JOIN tb_met_pago ON tb_pedido.id_met_pago = tb_met_pago.id 
                LEFT JOIN tb_met_envio ON tb_pedido.id_met_envio = tb_met_envio.id 
				LEFT JOIN tb_ped_status ON tb_pedido.status = tb_ped_status.id 
				WHERE tb_pedido.id_cliente = $id_cliente
                ORDER BY tb_pedido.fecha DESC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getProdPedido ($codigo) {
		$connection = conn();
		$sql = "SELECT tb_ped_detalle.*, producto.referencia, producto.nombre, producto.url FROM tb_ped_detalle
                LEFT JOIN (SELECT tb_producto.id, tb_producto.referencia, tb_producto.nombre, tb_producto_img.url FROM tb_producto
						  LEFT JOIN tb_producto_img ON tb_producto.id = tb_producto_img.id_producto) AS producto 
						  ON tb_ped_detalle.id_producto = producto.id 
				WHERE tb_ped_detalle.id_pedido = '$codigo'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getpedido($id) {
		$connection = conn();
        $sql = "SELECT * FROM tb_pedido WHERE id = $id";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getSlider() {
		$connection = conn();
		try {
			$sql = "SELECT * FROM tb_banner WHERE tb_banner.activo = 1 AND tb_banner.posicion = 0 ORDER BY orden";
			$query = $connection->prepare($sql);
			$query->execute();
			
			if ($query->rowCount() > 0) {
				$result = $query->fetchAll();
			} else {
				$result = null;
			}                	
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function getBanner() {
		$connection = conn();
		try {
			$sql = "SELECT * FROM tb_banner WHERE tb_banner.activo = 1 AND tb_banner.posicion = 1 ORDER BY orden LIMIT 2";
			$query = $connection->prepare($sql);
			$query->execute();
			
			if ($query->rowCount() > 0) {
				$result = $query->fetchAll();
			} else {
				$result = null;
			}                	
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}
?>
