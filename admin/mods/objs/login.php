<?php
require "./mods/server/login.php";

$_SESSION['empresa'] = "EDTPY";
$_SESSION['empresa-menu'] = "Edt<b>PY</b>";
$_SESSION['empresa-mini'] = "EDT<b>PY</b>";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if(isset($_POST['usuario']) || isset($_POST['contrasena'])) {
		if(isset($_POST['usuario']) && $_POST['usuario'] != '' && isset($_POST['contrasena']) &&  $_POST['contrasena'] != '' ) {
			$usuario = $_POST['usuario'];
			$contrasena = md5($_POST['contrasena']); //md5 para encriptar
	
			$login = login ($usuario, $contrasena);
			$_SESSION['logueado'] = 'logueado';
			$_SESSION['nome_usuario'] = $login['nombre'];
			$_SESSION['usuario'] = $login['usuario'];
			header('Location: index.php');
		} else { //Si no encontró apresenta error
			$mensaje = '<p class="alert alert-danger">Por favor, Ingrese Todos los Datos!</p>';
		}
	} else {
		$mensaje = '<p class="alert alert-danger">Por favor, Ingrese Todos los Datos!</p>';
	}
}
?>