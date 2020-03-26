
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>

<div class="container">
      <div class="row">
      <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
  

          <div class="col-md-8">
         <div class="card mb-4 bg-dark text-white">
            <?php
            echo '<img  class="card-img" style="filter: brightness(50%); height:200px;" src="data:image/jpeg;base64,'.base64_encode( $rows[2] ).'" alt="Card image">'
            ?>
            <div class="card-img-overlay">
               <h5 class="card-title"><?php echo utf8_encode($rows[0]);?></h5>
               <p class="card-text"><?php echo utf8_encode($rows[1])?></p>
               <p class="card-text">Last updated 3 mins ago</p>
            </div>
         </div>
      </div>

     
<?php } ?>

</div>


  </div>



