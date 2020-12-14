<?php
include("includes/funciones.php"); 
$json = file_get_contents('php://input');
$data = json_decode($json, true);
//echo "Tal cual recibo <br>";
//var_dump($data);
//echo "hola";
$arrayRespuesta = $data['resultado'];
$variable[] = ($arrayRespuesta[0]);
//echo "Acá coloco lo que necesito <br>";
//var_dump($variable);
$hash_pedido=$variable[0]['hash_pedido'];
$token=$variable[0]['token'];
//$transaction= obtenerTransaccion($hash_pedido);

//var_dump($transaction);

$token_privado='b34c07ddf5bff906a3df98cb8c8c4c5a';
$token_publico='ca287c91e8fe97e1601c9c6d205d4dab';
//var_dump($token);
if (sha1( $token_privado.$hash_pedido) === $token) {
   
    if($variable[0]['pagado']==false){
        $pagado=0;
    }else{
        $pagado=1;
    }
    guardarTransaccion($hash_pedido, $pagado, $variable[0]['forma_pago'], $variable[0]['fecha_pago'], $variable[0]['numero_pedido']);
    $jsonrespuesta = json_encode($variable);
  //  var_dump($jsonrespuesta);
    echo $jsonrespuesta;

}else{
    echo 'Token no coincide';
}


function  guardarTransaccion($hash_pedido, $pagado, $forma_pago, $fecha_pago, $numero_pedido){
    $connection = conn();
		try{
		$sql = "UPDATE transactions SET pagado = '$pagado', forma_pago = '$forma_pago', fecha_pago = '$fecha_pago', numero_pedido = '$numero_pedido', 
        WHERE hash_pedido = '$hash_pedido'";
            	$query = $connection->prepare($sql);
            	$query->execute();

				if ($query->rowCount() > 0) {
					$result = $query->fetch();
				} else {
					$result = null;
				}                	
			} catch (\Exception $e) {
				$result = $e;
            }
            return $result;
    $connection = disconn($connection);

}

?>