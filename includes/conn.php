<?php 
	function conn () {	
		// Local Host
		$user = 'root'; //usuario
		$password = ''; //senha
		$host = 'localhost'; //hosts
		$dbname = 'ecommerce'; //nombre da base de dados*/
		
		/*/ server
		$user = 'edppar_edtparpy'; //usuario
    	$password = 'gF*4-PQW?RRE'; //senha
		$host = 'localhost'; //hosts
		$dbname = 'edppar_edtpar'; //nombre da base de dados*/


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
?>