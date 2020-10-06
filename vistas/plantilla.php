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
                 
           



    



  <!-- footer -->
  <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text"> Antiguo Camino a Potrero Chico, Las Pedreras (Fomerrey 106), 65600  <br>
                            Hidalgo, N.L. México</p>
                            <a href="https://goo.gl/maps/JgbQ88GU7WKw1oeJA" class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contact
                            </h3>
                            <p class="footer_text">+52 811-596-7336<br>
                                enpotrerochico@gmail.com</p>
                        </div>
                    </div>
                  
                    <div class="col-xl-4 col-md-6 col-lg-4">
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
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
    <script src="<?php echo SERVERURL; ?>vistas/js/contact.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.form.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/jquery.validate.min.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/mail-script.js"></script>
    <script src="<?php echo SERVERURL; ?>vistas/js/main.js"></script>


</body>


</html>





