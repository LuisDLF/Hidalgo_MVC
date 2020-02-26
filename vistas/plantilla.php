<?php
	$peticionAjax=false;
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title><?php echo COMPANY; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
	
		<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/card.css">
		<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/carrusel.css">
	</head>

<body class="bg-dark">
	<?php  
		require_once "./controladores/vistasControlador.php";

		$vt = new vistasControlador();
		$vistasR=$vt->obtener_vistas_controlador();

	
	?>
	<!-- SideBar -->


	<!-- Content page-->
	

		<!-- NavBar -->
		<?php include "./vistas/modulos/navbar.php"; ?>
		<!--slidebar -->
		<?php include "./vistas/modulos/carrusel.php"; ?>
		<!-- Content page -->
		<?php
		if($vistasR=="Index"):
			require_once $vistasR;
		else:
			require_once $vistasR;
		endif;

	?>







		



	<!--===== Scripts -->

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   


</body>


</html>




