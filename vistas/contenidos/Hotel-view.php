
<?php
require_once "./controladores/Hotel_Controlador.php";





$hotel=new Hotel_Controlador();
if(Idioma=="es"){
$resultado=$hotel->Obtener_Hotel_Controlador($_GET["Id_Hotel"]);
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotel_Controller($_GET["Id_Hotel"]);
}

?>




<div class="container">

  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo $resultado[1]; ?></h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">

       <?php
            echo '<img class="img-fluid" src="data:image/jpeg;base64,'.base64_encode( $resultado[3] ).'" alt="Card image">'
            ?>
    </div>

    <div class="col-md-4">
      <h3 class="my-3"></h3>
      <p><?php echo $resultado[2];?></p>
      <h3 class="my-3">Project Details</h3>
      <ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Fotografias</h3>

  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div>
  <!-- /.row -->

</div>