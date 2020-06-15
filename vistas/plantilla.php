<!DOCTYPE html>
<html>

<head>
	<title><?php echo TITULO ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" charset="UTF-8">
	  <meta name="description" content="Sitio Web de Hidalgo Nuevo Leon">
  <meta name="keywords" content="Hotel,Hidalgo,PotreroChico,Potrero,escalar,Nuevo Leon,Potrero Chico">
  <meta name="author" content="Luis Daniel">
<link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/gijgo.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/animate.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>vistas/css/style.css">
	
</head>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS here -->
    
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
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




		


                
                        <!-- section-title -->
                        
                           <?php require_once $vistasR;?>
                       
                        <!-- /.section-title -->
                 
           



    



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
		
	
	<!--===== Scripts -->

    <script src="<?php echo SERVERURL; ?>vistas/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/popper.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/bootstrap.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/owl.carousel.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/ajax-form.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/waypoints.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.counterup.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/scrollIt.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/wow.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/nice-select.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.slicknav.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/plugins.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?php echo SERVERURL; ?>vistas/js/contact.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.form.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.validate.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/mail-script.js"></script>

    <script src="<?php echo SERVERURL; ?>vistas/js/main.js"></script>
</body>


</html>





