
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
  
 <div class="col-md-4 ">
         <div class="card mb-4 h-100 bg-primary">
            <?php
            echo '<img style="filter: brightness(50%); height: 200px;" class="card-img " src="data:image/jpeg;base64,'.base64_encode( $rows[2] ).'" alt="Card image">';
            ?>
            <div class="card-body">
               <h5 class="card-title"><?php echo utf8_encode($rows[0]);?></h5>
               <p class="card-text"><?php echo utf8_encode($rows[1])?></p>
               <a href="http://www.jquery2dotnet.com/" class="btn btn-outline-dark btn-sm">Go somewhere</a>
            </div>
         </div>
      </div>


     
<?php } ?>

</div>


  </div>