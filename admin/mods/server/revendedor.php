<?php 
	include_once "conn.php";

	function getAllRevendedores () {
		$connection = conn();
        $sql = "SELECT * FROM tb_revendedor
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
	
	function newRevendedor ($nombre, $telefono, $email, $direccion, $url) {
		$connection = conn();
		try {
			$sql = "INSERT INTO tb_revendedor (nombre, telefono, email, direccion, url)
		 			VALUES ('$nombre', '$telefono', '$email', '$direccion', '$url')";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $connection->lastInsertId();
			} else {
				$result = null;
			}
		} catch (\Exception $e) {
			$result = "Erro ->".$e;
		}

		$connection = disconn($connection);
		return $result;
	}

	function saveRevendedor ($id, $nombre, $telefono, $email, $direccion, $url) {
		$connection = conn();
		
		try {
			$sql = "SELECT * from tb_revendedor WHERE id = $id";
			$query = $connection->prepare($sql);
			$query->execute();

			$img = $query->fetch();

			//cambio de imagen
			if ($img['url'] != $url && $img['url'] != "no-image.png") {
				unlink("../img/revendedor/".$img['url']); //apaga imagen anterior
			}

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_revendedor SET nombre = '$nombre', telefono = '$telefono', email = '$email', 
						direccion = '$direccion', url = '$url'  WHERE id = $id";
				$query = $connection->prepare($sql);
				$query->execute();
				
                $result = $id;
			} else {
				$result = null;
			}			
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function deleteRevendedor ($codigo) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_revendedor WHERE id = $codigo";
			$query = $connection->prepare($sql);
			$query->execute();
			$img = $query->fetch();

			if ($img['url'] != "no-image.png") {
				if (!unlink("../img/revendedores/".$img['url'])) {  
					return $img." cannot be deleted due to an error";  
				}  
			}  
			
			$sql = "DELETE FROM tb_revendedor WHERE id = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();	

			if ($query->rowCount() > 0) {
				$result = $codigo;
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