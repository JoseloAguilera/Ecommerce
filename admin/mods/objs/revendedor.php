<?php 
    include_once "mods/server/revendedor.php";
	include_once "mods/server/uploads.php";

	$revendedores = getAllRevendedores();

   

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['nuevo'])){
			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = "no-image.png";
			} else {
				$extension = substr($_FILES["fileToUpload"]["type"], 6);
				$random_number = mt_rand(10000, 99999);
				$nombre_prod = str_replace(" ", "-", strtolower($_POST['nombre']));
				$imgname = $nombre_prod."-".$random_number.".".$extension;
				$img = saveImg ("../img/revendedores/", $imgname, "fileToUpload");
			}

			$incluir = newRevendedor ($_POST['nombre'], $_POST['telefono'], $_POST['email'], $_POST['direccion'], $img);
			if (substr($incluir,0,1) == "E") {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$incluir.'"</p>';
			} else if ($incluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron insertados correctamente.</p>';
				
                $revendedores = getAllRevendedores();
			}
		} else if (isset($_POST['guardar'])){ 
			// var_dump($_POST);

			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = $_POST['imgurl'];
			} else {
				$extension = substr($_FILES["fileToUpload"]["type"], 6);
				$random_number = mt_rand(10000, 99999);
				$nombre_prod = str_replace(" ", "-", strtolower($_POST['nombre']));
				$imgname = $nombre_prod."-".$random_number.".".$extension;
				$img = saveImg ("../img/revendedores/", $imgname, "fileToUpload");
			}

			$guardar = saveRevendedor ($_POST['codigo'], $_POST['nombre'], $_POST['telefono'], $_POST['email'], $_POST['direccion'], $img);

			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				
                $revendedores = getAllRevendedores();
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
		} else if (isset($_POST['excluir'])){
			$codigo =  $_POST['codigo'];
			$excluir = deleteRevendedor ($codigo);

			if ($excluir == $codigo) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron eliminados correctamente.</p>';
                $revendedores = getAllRevendedores();
			} else if ($excluir == "inactivo") {
				$tipomensaje = 'warning';
				$mensaje= '<h3>Atención!</h3><p>No se pudo eliminar el registro devido a productos pendientes.<br>La marca fue INACTIVADA.</p>';
                $revendedores = getAllRevendedores();
			} else if ($excluir == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$excluir.'"</p>';
			}
		}  else {
			$tipomensaje = 'error';
			$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error Desconocido</p>';
		}
	}
?>