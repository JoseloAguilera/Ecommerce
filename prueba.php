<!DOCTYPE html>
<html>

<body>
    

<?php 
//$respuesta2['data']="7sdf87sdf889u";
//$respuesta1[0]=$respuesta2;
//$result['resultado']=$respuesta1;


//var_dump($result['resultado']);

//print_r($result['resultado'][0]['7data']);
$fecha_actual=date("Y-m-d H:i:s");
$fecha_futura = strtotime('+1 day', strtotime($fecha_actual));
$fecha_futura = date('Y-m-d H:i:s', $fecha_futura);
echo "La fecha actual es ".$fecha_actual."<br>" ;
echo "La fecha mas 1 dia es ".$fecha_futura;  

?>
</body>
</html>