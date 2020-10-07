<?php 
	include_once "conn.php";

	function getAllClientes () {
		$connection = conn();
        $sql = "SELECT *, contacto.tipo, contacto.contacto FROM tb_cliente 
        LEFT JOIN (SELECT tb_cli_contacto.id_cliente, tb_cli_contacto.tipo, tb_cli_contacto.contacto FROM tb_cli_contacto
                    ORDER BY tb_cli_contacto.favorito DESC LIMIT 1) AS contacto
        ON tb_cliente.id = contacto.id_cliente
        ORDER BY nombre ASC";
        
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
    
    function getClienteContacto ($id) {
		$connection = conn();
        $sql = "SELECT * FROM tb_cli_contacto 
                WHERE tb_cli_contacto.id_cliente = $id
                ORDER BY tb_cli_contacto.favorito DESC";
        
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
    
    function getClienteDireccion ($id) {
		$connection = conn();
        $sql = "SELECT * FROM tb_cli_direccion 
                WHERE tb_cli_direccion.id_cliente = $id
                ORDER BY tb_cli_direccion.favorito DESC";
        
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

	// function newMarca ($nombre) {
	// 	$connection = conn();
	// 	try {
	// 		$sql = "INSERT INTO tb_marca (nombre, activo)
	// 	 			VALUES ('$nombre', 1)";
	// 		$query = $connection->prepare($sql);
	// 		$query->execute();

	// 		if ($query->rowCount() > 0) {
	// 			$result = $connection->lastInsertId();
	// 		} else {
	// 			$result = null;
	// 		}
	// 	} catch (\Exception $e) {
	// 		$result = "Erro ->".$e;
	// 	}

	// 	$connection = disconn($connection);
	// 	return $result;
	// }

	function saveClienteADM ($id, $mayorista) {
		$connection = conn();
		
		try {
			$sql = "SELECT * from tb_cliente WHERE id = $id";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_cliente SET mayorista = '$mayorista'
	 					WHERE id = $id";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
                    $result = $id;
				} else {
					$result = $id; //Sem alteração
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

	// function deleteMarca ($id) {
	// 	$connection = conn();
	// 	try {
	// 		$sql = "SELECT id_marca from tb_producto WHERE id_marca = '$id'";
	// 		$query = $connection->prepare($sql);
	// 		$query->execute();

	// 		if ($query->rowCount() > 0) {
	// 			$sql = "UPDATE tb_marca SET activo = 0
	//  					WHERE id = $id";
	// 			$query = $connection->prepare($sql);
    //             $query->execute();
                
    //             $sql = "UPDATE tb_producto SET activo = 0
    //                     WHERE id_marca = $id";
    //             $query = $connection->prepare($sql);
    //             $query->execute();
	// 			return "inactivo";
	// 		} else {
    //             $sql = "DELETE FROM tb_marca WHERE id = '$id'";
    //             $query = $connection->prepare($sql);
    //             $query->execute();
    
    //             if ($query->rowCount() > 0) {
    //                 $result = $id;
    //             } else {
    //                 $result = null;
    //             }    
    //         }
	// 	} catch (\Exception $e) {
	// 		$result = $e;
	// 	}

	// 	$connection = disconn($connection);
	// 	return $result;
	// }
?>