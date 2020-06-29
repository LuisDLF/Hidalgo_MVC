
<?php
require_once "./controladores/Hotel_Controlador.php";





$hotel=new Hotel_Controlador();
if(Idioma=="es"){
$resultado=$hotel->Obtener_Hotel_Controlador($_GET["Id_Hotel"]);
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotel_Controller($_GET["Id_Hotel"]);
}

?>


 

<section class="container" style="margin-top: 200px;">
  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
       <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image">';?>
    </div>
    <div class="carousel-item">
      <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image" >';?>
    </div>
    <div class="carousel-item">
       <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image" >';?>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>























