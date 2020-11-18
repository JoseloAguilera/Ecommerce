<?php
    include_once "mods/server/cliente.php";
    include_once "mods/server/producto.php";
    include_once "mods/server/pedido.php";

    $ctd_clientes = countAllClientes ();
    $ctd_productos = countAllProductos();
    $ctd_pedidos = countAllPedidos();
    
    $productos_stock = getAllProductoStock();
    $pedidos_pendientes = getPedidosPendientes();
    $pedidos_clientes = countPedidosClientes();
?>