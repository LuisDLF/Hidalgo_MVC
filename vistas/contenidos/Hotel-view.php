
<?php
require_once "./controladores/Hotel_Controlador.php";





$hotel=new Hotel_Controlador();
if(Idioma=="es"){
$resultado=$hotel->Obtener_Hotel_Controlador($_GET["Id_Hotel"]);
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotel_Controller($_GET["Id_Hotel"]);
}

?>



    <div class="col-md-8">
     <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image" style="width:750px; height:400px;">';?>
    </div>

 

<div class="container">
  <div class="row">
    <div class='list-group gallery'>
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                <a class="thumbnail fancybox" rel="ligthbox" href="http://placehold.it/300x320.png">
                    <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                    <div class='text-right'>
                        <small class='text-muted'>Image Title</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
</div>



























