<?php 
	session_start();
	if (!isset($_SESSION['logueado'])) {
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['empresa'];?> | Inicio</title>
	<?php include 'includes/head.php'; ?>
</head>
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<!-- MAIN HEADER -->
		<?php include 'includes/header.php'; ?>
		<!-- MAIN HEADER END -->

		<!-- ASIDE BAR -->
		<?php include 'includes/aside.php'; ?>
		<!-- ASIDE BAR END -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Contenido Principal -->
			<section class="content">
				<div class="modal fade modal-mensaje" id="modal-mensaje" tabindex="-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header modal-mensaje-<?php echo $tipomensaje;?>" > <!-- modal-mensaje-success or modal-mensaje-error -->
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<h1 class="modal-title text-center">
									<?php if ($tipomensaje == 'success') {?>
										<img src="img/success-icon.png"> 
									<?php } else { ?>
										<img src="img/error-icon.png">
									<?php }?>
								</h1>
							</div>
							<div class="modal-body text-center">
								<p> <?php echo $mensaje; ?></p>
							</div>
						</div>
					</div>
				</div>
            	<div class="box">
					<div class="box-header with-border">
						<form action="" method="POST" autocomplete="off">
							<input type="hidden" class="form-control" id="codigo" name="codigo" value="1516" required>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary" name="nuevo">Guardar</button>
							</div>
						</form>
					</div>
					<!-- Corpo de Caja -->
					<div class="box-body">
					</div>
				</div>
			</section>
			
			<?php
				// $path_role = "";
				// switch ($_SESSION['role']) {
				// 	case 0:
				// 		# code...
				// 		break;
				// 	case 1:
				// 		include "mods/pwrtlog/index.php"; 
				// 		break;
				// 	case 2:
				// 		include "mods/pwrtfin/index.php"; 
				// 		break;
				// 	default:
				// 		# code...
				// 		break;
				// }
				//include $path_role."/index.php";
			?>

		</div> <!-- /.content-wrapper -->
		

		<!-- FOOTER -->
		<?php include "includes/footer.php"; ?>
		<!-- ./FOOTER -->
	</div> <!-- ./Contenido -->
	
	<!-- SCRIPTS (js) -->
	<?php include "includes/scripts.php"; ?>
	<!-- ./SCRIPTS (js) -->
</body>
</html>