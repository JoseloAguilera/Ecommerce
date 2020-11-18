<!DOCTYPE html>
<html>

<body>
    

<?php


//echo "respuesta".$_GET['respuesta'];
//echo "data".$_GET['resultado[data]'];
//$datos['comercio_token_privado']
$token_privado='a16553c47d9ede02d69104b290d1d60a';
$token_publico='f826dc7582d24b665df83da373a76b22';
$idPedido=1;
$total=20000;
//sha1($datos['comercio_token_privado'] . $idPedido . strval(floatval($j['monto_total'])));

$token= sha1((int)$token_privado + (int)'DATOS-COMERCIO');

//var_dump($token);

$consulta['token']= $token;
$consulta['public_key']= $token_publico;



//var_dump($datosCodificados);
//API URL
//$url = "https://api.pagopar.com/api/comercios/2.0/datos-comercio/";
$url="http://edtpy.com/Tienda/prueba.php";
$postdata = json_encode($consulta);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_URL, $url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = json_decode(curl_exec($ch));
if(curl_errno($ch))	{
    echo 'Curl error: ' . curl_error($ch);  		}
    else{ print_r($result);
     }
curl_close($ch);
var_dump ($result);


//recibir
/*echo $payload;
$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
echo $data["resultado"];*/


/*cho "este es el post";
var_dump($_POST);*/

?>
<!--form id="formulario" action="recibir.php" method="post">
    <input type="hidden" name="token" value="<?php //echo $pedido_token?>">
    <input type="hidden" name="comprador['ruc']" value="4247903-7">
    <input type="hidden" name="comprador['email']" value="joseaguilera1709@gmail.com">
    <input type="hidden" name="comprador['nombre']" value="José Aguilera">
    <input type="hidden" name="comprador['telefono']" value="0973118404">
    <input type="hidden" name="comprador['direccion']" value="CDE">
    <input type="hidden" name="comprador['documento']" value="5971557">
    <input type="hidden" name="comprador['coordenadas']">
    <input type="hidden" name="comprador['razon_social']" value="José Aguilera">
    <input type="hidden" name="comprador['tipo_documento']" value="CI">
    <input type="hidden" name="comprador['direccion_referencia']" value="José Aguilera">
    <input type="hidden" name="public_key" value="<?php// echo $token_publico?>">
    <input type="number" name="monto_total" value="100000">
    <input type="hidden" name="tipo_pedido" value="VENTA-COMERCIO">
    <input type="hidden" name="compras_items['ciudad']" value="1">
    <input type="hidden" name="compras_items['nombre']" value="Pedido de EDT - PY">
    <input type="hidden" name="compras_items['cantidad']" value="1">
    <input type="hidden" name="compras_items['categoria']" value="909">
    <input type="hidden" name="compras_items['public_key']" value="<?php //echo $token_publico?>">
    <input type="hidden" name="compras_items['url_imagen']" value="http://www.fernandogoetz.com/d7/wordpress/wp-content/uploads/2017/10/ticket.png">
    <input type="hidden" name="compras_items['descripcion']" value="Ticket virtual EDT - PY">
    <input type="hidden" name="compras_items['id_producto']" value="895">
    <input type="hidden" name="compras_items['precio_total']" value="100000">
    <input type="hidden" name="compras_items['vendedor_telefono']" value="Pedido de EDT - PY">
    <input type="hidden" name="compras_items['vendedor_direccion']" value="">
    <input type="hidden" name="compras_items['vendedor_direccion_referencia']" value="">
    <input type="hidden" name="compras_items['vendedor_direccion_coordenadas']" value="">
    <input type="hidden" name="fecha_maxima_pago" value="2020-12-12 14:14:48">
    <input type="hidden" name="id_pedido_comercio" value="1134">
    <input type="hidden" name="descripcion_resumen" value="">
    
    


    <button type="submit" id="btnEnviar" name="btnEnviar">HACER PEDIDO </button>
</form-->
<?php



?>



<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
<script src="js/enviar.js"></script>
</body>
</html>