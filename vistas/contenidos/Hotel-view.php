
<?php
require_once "./controladores/Hotel_Controlador.php";





$hotel=new Hotel_Controlador();
if(Idioma=="es"){
$resultado=$hotel->Obtener_Hotel_Controlador($_GET["Id_Hotel"]);
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotel_Controller($_GET["Id_Hotel"]);
}

?>




  <div class="container mt-4">

  <!-- Portfolio Item Heading -->
  <h1 style="margin-top: 200px"><?php echo $resultado[1]; ?></h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
     <?php echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image" style="width:750px; height:400px;">';?>
    </div>

 




  </div>
 

</div>
