<!DOCTYPE html>
<html>

<body>
    

<?php
include_once "includes/conn.php";


//echo "respuesta".$_GET['respuesta'];
//echo "data".$_GET['resultado[data]'];
//$datos['comercio_token_privado']
$token_privado='882a6551ea33c6372be75e868b1b45f7';
$token_publico='59fd417c531214db01e3db5c050c1bde';
$idPedido=19;
$total=20000;
$id_comprador=1;
//sha1($datos['comercio_token_privado'] . $idPedido . strval(floatval($j['monto_total'])));

$pedido_token= sha1($token_privado. $idPedido.strval(floatval($total)));
$comprador['ruc']= "4247903-7";
$comprador['email']= "joseaguilera@gmail.com";
$comprador['nombre']= "José Aguilera";
$comprador['telefono']= "0973118404";
$comprador['direccion']= "CDE";
$comprador['documento']= "5971557";
$comprador['coordenadas']= "";
$comprador['razon_social']= "José Aguilera";
$comprador['tipo_documento']= "CI";
$comprador['direccion_referencia']= null;
$comprador['ciudad']= "";


$compras_items['ciudad']= "1";
$compras_items['nombre']= "Pedido de EDT - PY";
$compras_items['cantidad']= 1;
$compras_items['categoria']= "909";
$compras_items['public_key']= "$token_publico";
$compras_items['url_imagen']= "http://www.fernandogoetz.com/d7/wordpress/wp-content/uploads/2017/10/ticket.png";
$compras_items['descripcion']= "Ticket virtual EDT - PY";
$compras_items['id_producto']= 895;
$compras_items['precio_total']= $total;
$compras_items['vendedor_telefono']= "";
$compras_items['vendedor_direccion']= "";
$compras_items['vendedor_direccion_referencia']= "";
$compras_items['vendedor_direccion_coordenadas']= "";



$pedido['token']=$pedido_token;
$pedido['comprador']=$comprador;
$pedido['public_key']="$token_publico";
$pedido['monto_total']=$total;
$pedido['tipo_pedido']="VENTA-COMERCIO";
$pedido['compras_items'][0]=$compras_items;
$pedido['fecha_maxima_pago']="2020-12-12 14:14:48";
$pedido['id_pedido_comercio']=$idPedido;
$pedido['descripcion_resumen']="";


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
if(curl_errno($ch))	{
    echo 'Curl error: ' . curl_error($ch);  		}
    else{ 
        if($result["respuesta"]==true){
            $fecha_maxima=$pedido['fecha_maxima_pago'];
            $id_producto=$compras_items['id_producto'];
            $hash_pedido=$result['resultado'][0]['data'];
            var_dump($fecha_maxima);
            var_dump($id_producto);
            var_dump($hash_pedido);
            $connection = conn();
            $sql = "INSERT INTO transactions (id, totalMonto, hash_pedido, maxDateForPayment, compradorId, descripcion)
            VALUES ($idPedido, $total, '$hash_pedido', '$fecha_maxima' , $id_comprador, 'hola' )";
            $query = $connection->prepare($sql);
            $query->execute();

            $connection = disconn($connection);
            
            header('Location: https://www.pagopar.com/pagos/'.$result['resultado']);
            exit();
        }else{
            echo "Error, consulte al administrador";
        }
        print_r(["resultado"]);
     }
curl_close($ch);

    



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



<!--script src="https://code.jquery.com/jquery-2.2.2.min.js">script>
<script src="js/enviar.js">script-->
</body>
</html>