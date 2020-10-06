
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
 
 
    <div class="carousel-item active">
       <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image">';?>
    </div>
   
</section>