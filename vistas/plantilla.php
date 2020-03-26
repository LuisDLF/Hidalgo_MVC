<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITULO ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" charset="UTF-8">
	  <meta name="description" content="Sitio Web de Hidalgo Nuevo Leon">
  <meta name="keywords" content="Hotel,Hidalgo,PotreroChico,Potrero,escalar,Nuevo Leon,Potrero Chico">
  <meta name="author" content="Luis Daniel">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/carrusel.css">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/card.css">
	<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/footer.css">
	
</head>

<body style="background-color: #ebebea">
	<?php  
		require_once "./controladores/vistasControlador.php";

		$vt = new vistasControlador();
		$vistasR=$vt->obtener_vistas_controlador();
	
	?>
<?php 
		//NavBat
		include "./vistas/modulos/navbar.php"; 
		?>

<header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="page-title">Hike Pageheader</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>


		

<div class="card-section">
        <div class="container">
            <div class="card bg-white">
                
                        <!-- section-title -->
                        
                           <?php require_once $vistasR;?>
                       
                        <!-- /.section-title -->
                 
            </div>



             <footer>
     <div class="container-fluid bg-dark py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
            <div class="row py-0">
          <div class="col-sm-1 hidden-md-down">
              <a class="bg-circle bg-info" href="#">
                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-11 text-white">
                <div><h4>Contact</h4>
                    <p><span class="header-font"><span class="header-font">website.com</span>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-5">
          <div class="d-inline-block">
            <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
              <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook text-white"></i>
    </a>
            </div>
            <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
              <a href="https://twitter.com/">
                <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
            </div>

            <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
              <a href="https://www.linkedin.com/company/">
                <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
            </div>
            <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
              <a href="https://www.google.com/">
                <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</footer>
            </div>



    
            </div>



		
	
	<!--===== Scripts -->

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>





