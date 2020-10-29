<?php 
 include_once "conn.php";
 include_once "funciones.php";
if(isset($_POST['id'])):
	//require "conexion.php";
	//$user=new ApptivaDB();
	$connection = conn();
	$u=getCiudades($_POST['id']);
	
	$html="";
	foreach ($u as $value)
		$html.="<option value='".$value['id']."'>".$value['nombre']."</option>";
	echo $html;	
endif;