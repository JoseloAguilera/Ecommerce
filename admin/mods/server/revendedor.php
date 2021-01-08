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
?>