<?php
require 'pagopar/Pagopar.php';

$db = new DBPagopar( 'ecommerce' , 'root' , '');
 /*Generar nuevo pedido*/
    //Id mayor al Id del último pedido, solo para pruebas
    $idNuevoPedido = 5;
    //Generamos el pedido
    $pedidoPagoPar = new Pagopar($idNuevoPedido, $db);

    //Creamos el comprador
    $buyer = new BuyerPagopar();
    $buyer->name            = 'Juan Perez';
    $buyer->public_key      = 'public_key';
    $buyer->cityId          = 1;
    $buyer->email          = 'joseaguilera1709@gmail.com';
    $buyer->tel             = '0972200046';
    $buyer->typeDoc         = 'CI';
    $buyer->doc             = '352221';
    $buyer->addr            = 'Mexico 840';
    $buyer->addRef          = 'alado de credicentro';
    $buyer->addrCoo         = '-25.2844638,-57.6480038';
    $buyer->ruc             = null;
    $buyer->socialReason    = null;
    //Agregamos el comprador
    $pedidoPagoPar->order->addPagoparBuyer($buyer);

    //Creamos los productos
    $item1 = new ItemPagopar();
    $item1->name                = "Válido 1 persona";
    $item1->productId           = 3;
    $item1->qty                 = 1;
    $item1->price               = 10000;
    $item1->cityId              = 1;
    $item1->desc                = "producto";
    $item1->url_img             = "https://www.hendyla.com/images/lazo_logo.png";
    $item1->weight              = '0.1';
    $item1->category            = 3;
    $item1->sellerPhone         = '0985885487';
    $item1->sellerEmail         = 'correo_electrónico';
    $item1->sellerAddress       = 'lorep ipsum';
    $item1->sellerAddressRef    = '';
    $item1->sellerAddressCoo    = '-28.75438,-57.1580038';

    $item2 = new ItemPagopar();
    $item2->name                = "Heladera";
    $item2->productId           = 6;
    $item2->qty                 = 1;
    $item2->price               = 785000;
    $item2->cityId              = 1;
    $item2->desc                = "producto";
    $item2->url_img             = "https://www.hendyla.com/images/lazo_logo.png";
    $item2->weight              = '5.0';
    $item2->category            = 3;
    $item2->sellerPhone         = '0985885487';
    $item2->sellerEmail         = 'correo_electrónico';
    $item2->sellerAddress       = 'lorep ipsum dolor';
    $item2->sellerAddressRef    = '';
    $item2->sellerAddressCoo    = '-28.75438,-57.1580038';

    //Agregamos los productos al pedido
    $pedidoPagoPar->order->addPagoparItem($item1);
    $pedidoPagoPar->order->addPagoparItem($item2);

    //Pasamos los parámetros para el pedido
    $pedidoPagoPar->order->publicKey = '9dfe9b614b021335e26c07de6f495880';
    $pedidoPagoPar->order->privateKey = '512c707645c561f5fda5da4a3ed2ba26';
    $pedidoPagoPar->order->typeOrder = 'VENTA-COMERCIO';
    $pedidoPagoPar->order->desc = 'Entrada Retiro';
    $pedidoPagoPar->order->periodOfDaysForPayment = 1;
    $pedidoPagoPar->order->periodOfHoursForPayment = 0;

    //Hacemos el pedido
    $pedidoPagoPar->newPagoparTransaction();




?>