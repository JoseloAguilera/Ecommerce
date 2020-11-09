<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

var_dump($data);
return "hola";

//---mostrar respuesta automaticamente, sin necesidad de procesarla nuevamente.
/*$arrayRespuesta = $data->resultado;
$variable = array($arrayRespuesta[0]);
$jsonrespuesta = json_encode($variable);


if ($data) {
    $pagado = $cancelado = 0;
    $pagado = (pSQL($data->resultado[0]->pagado)) ? 1 : 0;
    $forma_pago = pSQL($data->resultado[0]->forma_pago);
    $fecha_pago = pSQL($data->resultado[0]->fecha_pago);
    $fecha_maxima_pago = pSQL($data->resultado[0]->fecha_maxima_pago);
    $hash_pedido = pSQL($data->resultado[0]->hash_pedido);
    $monto = pSQL($data->resultado[0]->monto);
    $numero_pedido = pSQL($data->resultado[0]->numero_pedido);
    $cancelado = (pSQL($data->resultado[0]->cancelado)) ? 1 : 0;
    $forma_pago_identificador = pSQL($data->resultado[0]->forma_pago_identificador);
    $token = pSQL($data->resultado[0]->token);

    # Si coinciden los token, esta validación es extrictamente obligatoria para evitar el uso malisioso de este endpoint
    if (sha1(Configuration::get('PAGOPAR_CLAVE_PRIVADA') . $hash_pedido) === $token) {
       

        if ($pagado == 1) {
            #$pagopar_complete = Configuration::get('PAGOPAR_PAYMENT_COMPLETE');
            #$history->changeIdOrderState($pagopar_complete, (int) ($objOrder->id));
            #$nuevoEstado = Configuration::get('PAGOPAR_PAYMENT_COMPLETE');
            $nuevoEstado = 2;
            $history->id_order = (int) ($objOrder->id);
            #$history->id_order_state = (int) ($nuevoEstado);
            $history->changeIdOrderState((int) ($nuevoEstado), $objOrder);
            $history->add(true);
        } elseif ($cancelado == 1) {
            #$history->changeIdOrderState('6', (int) ($objOrder->id));
            $nuevoEstado = 6;
            $history->id_order = (int) ($objOrder->id);
            #$history->id_order_state = (int) ($nuevoEstado);
            $history->changeIdOrderState((int) ($nuevoEstado), $objOrder);
            $history->add(true);
        } elseif ($pagado == 0) {
            #$pagopar_waiting = Configuration::get('PAGOPAR_PAYMENT_WAITING');
            #$history->changeIdOrderState($pagopar_waiting, (int) ($objOrder->id));
            $nuevoEstado = Configuration::get('PAGOPAR_PAYMENT_WAITING');
            $history->id_order = (int) ($objOrder->id);
            #$history->id_order_state = (int) ($nuevoEstado);
            $history->changeIdOrderState((int) ($nuevoEstado), $objOrder);
            $history->add(true);
        }



        echo $jsonrespuesta;
    } else {
        echo 'Token no coincide';
        exit();
    }
} else {
    echo 'Token no coincide';
    exit();
}*/
?>