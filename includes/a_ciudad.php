<?php 
	include_once "funciones.php";

    // var_dump($_GET);
    if (isset($_GET)) {
        $opcao = strip_tags($_GET["parametro"]);
        $departId = strip_tags($_GET["depart"]);
    
        if ( $opcao == "0"){
            $result = getCiudades ($departId);
    
            $response_array['status'] = 'success'; /* match error string in jquery if/else */ 
            $response_array['message'] = $result;   /* add custom message */ 
            header('Content-type: application/json');
            echo json_encode($response_array);//O retorno vai ser um json
        }    
    }
?>