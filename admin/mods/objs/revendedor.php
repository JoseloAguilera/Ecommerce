<?php 
    include_once "mods/server/revendedor.php";
	include_once "mods/server/uploads.php";

	$clientes = getAllRevendedores();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['guardar'])){ 
			if (basename($_FILES["fileToUpload"]["name"]) == "") {
				$img = $_POST['imgurl'];
			} else {
				$extension = substr($_FILES["fileToUpload"]["type"], 6);
				$random_number = mt_rand(10000, 99999);
				$nombre_cli = str_replace(" ", "-", strtolower($_POST['nombre']));
				$imgname = $nombre_cli."-".$random_number.".".$extension;
				$img = saveImg ("../img/revendedores/", $imgname, "fileToUpload");
			}

            $mayorista = null;
			if(!isset($_POST['mayorista'])) {
				$mayorista = 0;
			} else {
				$mayorista = 1;
			}
			
			$guardar = saveClienteADM ($_POST['codigo'], $mayorista, $img);

			if ($guardar == $_POST['codigo']) {
				$tipomensaje = 'success';
				$mensaje= '<h3>Perfecto!</h3><p>Los datos fueron actualizados correctamente.</p>';
				
				$clientes = getRevendedores();
			} else if ($guardar == null) {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Registro NO ENCONTRADO</p>';
			} else {
				$tipomensaje = 'error';
				$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error->"'.$guardar.'"</p>';
			}
		}  else {
			$tipomensaje = 'error';
			$mensaje = '<h3>Error!</h3><p>Consulte al administrador de sistemas.<br>Error Desconocido</p>';
		}
	}
?>