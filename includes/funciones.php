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
	
	function getAllProductos () {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto ORDER BY id ASC";
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
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.destaque = '1'";
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




?>
