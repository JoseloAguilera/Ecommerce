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
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.destaque = '1' AND tb_producto.activo = '1' ORDER BY tb_producto.id DESC";
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
	function getProductoStock ($codigo) {
		$connection = conn();
		$sql = "SELECT * FROM tb_producto_stock WHERE id_producto = '$codigo'";
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
	
	function getProdbyCategoria ($categoria, $offset, $limit) {
		$connection = conn();
		if($categoria != 'ALL') {
			$sql = "SELECT tb_producto_categoria.*, tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto_categoria 
					LEFT JOIN tb_producto ON tb_producto_categoria.id_producto=tb_producto.id 
					LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id 
					WHERE tb_producto.activo = 1 AND (tb_producto_categoria.id_categoria = '$categoria' OR tb_producto_categoria.id_categoria IN (SELECT id FROM tb_categoria WHERE id_padre = '$categoria')) GROUP BY (tb_producto.id) ORDER BY nombre ASC LIMIT $offset, $limit";
		} else {
			$sql = "SELECT tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id WHERE tb_producto.activo = 1 AND tb_producto.id_categoria IN (SELECT id FROM tb_categoria WHERE tb_categoria.activo = 1) ORDER BY nombre ASC LIMIT $offset, $limit";
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

	function countProdbyCategoria ($categoria) {
		$connection = conn();
		if($categoria != 'ALL') {
			$sql = "SELECT COUNT(tb_producto_categoria.id_producto) FROM tb_producto_categoria 
					LEFT JOIN tb_producto ON tb_producto_categoria.id_producto=tb_producto.id 
					LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id 
					WHERE tb_producto.activo = 1 AND (tb_producto_categoria.id_categoria = '$categoria' OR tb_producto_categoria.id_categoria IN (SELECT id FROM tb_categoria WHERE id_padre = '$categoria')) GROUP BY (tb_producto.id) ORDER BY nombre ASC";
		// } else {
		// 	$sql = "SELECT tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id WHERE tb_producto.activo = 1 AND tb_producto.id_categoria IN (SELECT id FROM tb_categoria WHERE tb_categoria.activo = 1) ORDER BY nombre ASC";
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

	function getProdbySearch ($busca, $offset, $limit) {
		$connection = conn();
		$sql = "SELECT tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto
		LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id 
		WHERE (tb_producto.nombre LIKE '%$busca%' AND tb_producto.activo = 1) AND tb_producto.activo = 1 ORDER BY nombre ASC LIMIT $offset, $limit";
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

	function countProdbySearch ($busca) {
		$connection = conn();
		$sql = "SELECT COUNT(tb_producto.id) FROM tb_producto
		WHERE (tb_producto.nombre LIKE '%$busca%' AND tb_producto.activo = 1) AND tb_producto.activo = 1";
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

	function countPagesProd () {
		$connection = conn();
		$sql = "SELECT COUNT(*) FROM tb_producto";
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
	
	function saveCliente ($id, $nombre, $apellido, $doc, $ruc, $razonsocial, $telefono, $email, $depart, $ciudad, $calle, $referencias) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_cliente WHERE id = '$id'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_cliente SET nombre = '$nombre', nombre = '$nombre', apellido = '$apellido', documento = '$doc', ruc = '$ruc', razon_social = '$razonsocial', telefono = '$telefono', email = '$email'
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

	function getSliderMovil() {
		$connection = conn();
		try {
			$sql = "SELECT * FROM tb_banner WHERE tb_banner.activo = 1 AND tb_banner.posicion = 2 ORDER BY orden";
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

	function visit ($producto) {
		$connection = conn();
		
		try {
            $sql = "SELECT * from tb_producto WHERE id = '$producto'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
                $result = $query->fetch();
                $total = $result['total_hits'] + 1;
                $unique = $result['unique_hits'];
                if (isNewVisitor($producto)) {
                    $unique = $unique + 1;
                }
				$sql = "UPDATE tb_producto SET total_hits = $total, unique_hits = $unique
	 					WHERE id = '$producto'";
				$query = $connection->prepare($sql);
				$query->execute();
			} 		
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $producto;
    }
    
    function isNewVisitor ($producto) {
        $visited = array_key_exists('visited'.$producto, $_SESSION);
        if ($visited == false) {
            $_SESSION['visited'.$producto] = true;
        }
        return !$visited;
	}
	
	function getInfo ($pag) {
		$connection = conn();
		$sql = "SELECT cms.* FROM cms WHERE pagina = '$pag'";
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

	function enviarPagopar($idPedido, $total_envio, $total_compra, $id_comprador, $ruc, $email, $nombre, $apellido, $telefono, $direccion, $cedula,
							$razonsocial){
		
		$token_privado='b34c07ddf5bff906a3df98cb8c8c4c5a';
		$token_publico='ca287c91e8fe97e1601c9c6d205d4dab';
		$total=$total_envio+$total_compra;
		//sha1($datos['comercio_token_privado'] . $idPedido . strval(floatval($j['monto_total'])));

		$pedido_token= sha1($token_privado. $idPedido.strval(floatval($total)));
		$comprador['ruc']= $ruc;
		$comprador['email']= $email;
		$comprador['nombre']= "$nombre "." $apellido";
		$comprador['telefono']= $telefono;
		$comprador['direccion']= $direccion;
		$comprador['documento']= $cedula;
		$comprador['coordenadas']= "";
		$comprador['razon_social']= $razonsocial;
		$comprador['tipo_documento']= "CI";
		$comprador['direccion_referencia']= null;
		$comprador['ciudad']= "";


		$compras_items['ciudad']= "1";
		$compras_items['nombre']= "Pedido de EDT - PY";
		$compras_items['cantidad']= 1;
		$compras_items['categoria']= "909";
		$compras_items['public_key']= "$token_publico";
		$compras_items['url_imagen']= "http://www.edtpy.com/img/logo.png";
		$compras_items['descripcion']= "Ticket virtual EDT - PY";
		$compras_items['id_producto']= 895;
		$compras_items['precio_total']= $total;
		$compras_items['vendedor_telefono']= "";
		$compras_items['vendedor_direccion']= "";
		$compras_items['vendedor_direccion_referencia']= "";
		$compras_items['vendedor_direccion_coordenadas']= "";
	
		$fecha_actual=date("Y-m-d H:i:s");
		$fecha_futura = strtotime('+1 day', strtotime($fecha_actual));
		$fecha_futura = date('Y-m-d H:i:s', $fecha_futura);

		$pedido['token']=$pedido_token;
		$pedido['comprador']=$comprador;
		$pedido['public_key']="$token_publico";
		$pedido['monto_total']=$total;
		$pedido['tipo_pedido']="VENTA-COMERCIO";
		$pedido['compras_items'][0]=$compras_items;
		$pedido['fecha_maxima_pago']=$fecha_futura;
		$pedido['id_pedido_comercio']=$idPedido;
		$pedido['descripcion_resumen']="";

		//var_dump($pedido);
		//API URL
		$url = "https://api.pagopar.com/api/comercios/1.1/iniciar-transaccion";
		$postdata = json_encode($pedido);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		$result = json_decode(curl_exec($ch), true);
		//var_dump($result);
	    //var_dump($result['resultado'][0]['data']);
		if(curl_errno($ch))	{
    		echo 'Curl error: ' . curl_error($ch);  		}
    	else{ 
        	if($result["respuesta"]==true){
            	$hash_pedido=$result['resultado'][0]['data'];
                $connection = conn();
                try{
            	$sql = "INSERT INTO transactions (id, monto, fecha_maxima_pago, hash_pedido, compradorId)
            	    VALUES ($idPedido, $total, '$fecha_futura' , '$hash_pedido', $id_comprador )";
            	$query = $connection->prepare($sql);
            	$query->execute();
                }catch (\Exception $e) {
				$result = $e;
			    }
            	$connection = disconn($connection);
            	//echo $result;
            	
            	?>
            	<script type="text/javascript"> 
                    window.location="https://www.pagopar.com/pagos/<?php echo $hash_pedido;?>"; 
                </script> 
            	<?php
                
	            //header('Location:https://www.pagopar.com/pagos/'.$hash_pedido);
            	//exit();
        	}else{
				echo 'Consulte al administrador de sistemas.<br>Error: '.$result['resultado'];
        	}
     	}
		curl_close($ch);
	}


	function actualizarPagopar($pagado, $forma_pago, $fecha_pago, $numero_pedido, $cancelado, $forma_pago_identificador, $hash_pedido){
		if($pagado==true){
			$pago=1;
		}else{
			$pago=0;
		}
		if($cancelado==true){
			$cancel=1;
		}else{
			$cancel=0;
		}
		$connection = conn();
		try{
			$sql = "UPDATE transactions SET pagado = '$pago', forma_pago = '$forma_pago', numero_pedido = '$numero_pedido', cancelado = '$cancel', 
					forma_pago_identificador = '$forma_pago_identificador', updated = 'current_timestamp' WHERE hash_pedido = '$hash_pedido'";
		        $query = $connection->prepare($sql);
            	$query->execute();

			} catch (\Exception $e) {
				$result = $e;
				echo "Error, contacte al administrador. Error -> ".$result;
			}
			$connection = disconn($connection);
	}


	function obtenerPedido($hash){
		$connection = conn();

		$sql= "SELECT id FROM transactions WHERE hash_pedido = '"."$hash'";
		$query = $connection->prepare($sql);
		$query->execute();
		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}
		return $result;

		$connection = disconn($connection);

	}


	function actualizarPago($pedido_id){
		$connection = conn();
		try{
			$sql = "UPDATE tb_pedido SET status = '2' WHERE id = '$pedido_id'";
				$query = $connection->prepare($sql);
				$query->execute();

			} catch (\Exception $e) {
				$result = $e;
				echo "Error, contacte al administrador. Error -> ".$result;
			}
			$connection = disconn($connection);

	}
	function getRevendedores () {
		$connection = conn();
        $sql = "SELECT * FROM tb_revendedor ORDER BY id ASC";
        
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
	
	function actualizaStok ($idprod, $qty) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_producto_stock WHERE id_producto = '$idprod'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) { //si ya hay un stock para ese producto 
				$antiguo = $query->fetch();
			} else {
				return "Erro PRODUCTO NO ENCONTRADO.";
			}

			$stock = $antiguo['stock'] - $qty;
			$sql = "UPDATE tb_producto_stock SET stock = '$stock'
					WHERE id_producto = '$idprod'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $stock;
			} else {
				$result = null;
			}           	
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}
	//include('../Mailer/src/PHPMailer.php');
	function enviarMail(){
		$mail = new PHPMailer();

		try{

		}catch (Exception $e){

		} 

	}
?>
