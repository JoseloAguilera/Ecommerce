<?php 
	function conn () {	
		// Local Host
		// $user = 'root'; //usuario
		// $password = '12345678'; //senha
		// $host = 'localhost'; //hosts
		// $dbname = 'edtpy'; //nombre da base de dados
		
		$user = 'root'; //usuario
		$password = ''; //senha
		$host = 'localhost'; //hosts
		$dbname = 'ecommerce'; //nombre da base de dados

		$parametros = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"); //caso os dados estejam com acentos ou ç
		try {
			//criando conexão usado PDO
			$connection = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password, $parametros);
			//setando atributos
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $connection;

		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	function disconn ($connection) {
		if ($connection != null) {
			$connection = null;
		}
	}

	function putMySQlToData($mysqldata) {
		$data = "";
		$data = substr($mysqldata, 8,2)."/".substr($mysqldata, 5,2)."/".substr($mysqldata, 0,4);
		return $data;
	}

	function putDataToMySQl($data) {
		$mysqldata = "";
		$mysqldata = substr($data, 6,4)."-".substr($data, 3,2)."-".substr($data, 0,2);
		return $mysqldata;
	}
?>