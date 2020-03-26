
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>

<div class="container m-2 text-center item-center">
      <div class="row">

      <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
  

          <div class="col-md-8">
         <div class="card- mb-2 bg-dark text-white rounded">
            <?php
            echo '<img  class="card-img" style="filter: brightness(0.6); height:200px" src="data:image/jpeg;base64,'.base64_encode( $rows[2] ).'" alt="Card image">'
            ?>
            <div class="card-img-overlay">
               <h5 class="card-title text-light"><?php echo utf8_encode($rows[0]);?></h5>
               <p class="card-text"><?php echo utf8_encode($rows[1])?></p>
               <a class="btn btn-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
         </div>
      </div>

     
<?php } ?>

</div>


  </div>



