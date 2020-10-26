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
		$sql = "SELECT tb_producto.* FROM tb_producto ORDER BY id ASC LIMIT 20";
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
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.destaque = '1' AND tb_producto.activo = '1' ORDER BY RAND()";
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
			$sql = "SELECT tb_producto_categoria.*, tb_producto.*, tb_producto_img.url as img, tb_producto_img.orden as orden FROM tb_producto_categoria LEFT JOIN tb_producto ON tb_producto_categoria.id_producto=tb_producto.id LEFT JOIN tb_producto_img ON tb_producto_img.id_producto = tb_producto.id WHERE tb_producto.activo = 1 AND (tb_producto_categoria.id_categoria = '$categoria' OR tb_producto_categoria.id_categoria IN (SELECT id FROM tb_categoria WHERE id_padre = '$categoria')) ORDER BY nombre ASC";
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
					$result = $connection->lastInsertId();
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

		$sql= "SELECT tb_usuario_cliente.*, tb_cliente.nombre, tb_cliente.mayorista from tb_usuario_cliente LEFT JOIN tb_cliente ON tb_usuario_cliente.id_cliente = tb_cliente.id WHERE email = '$email' AND contrasena = '$contrasena'";
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
	
	function getContacto ($id, $tipo) {
		$connection = conn();
        $sql = "SELECT * FROM tb_cli_contacto
                WHERE tb_cli_contacto.id_cliente = $id AND tb_cli_contacto.tipo = '$tipo'";
        
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

?>
