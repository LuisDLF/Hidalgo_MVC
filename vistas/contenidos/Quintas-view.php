
<?php
require_once "./controladores/Quintas_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>

<div class="container">
   
   <h3 class="text-center pb-3 mb-4 mt-4 border-bottom shadow h-md-250 bg-white">
      <?php echo Hoteles_titulo ?>
   </h3>



<div class="row">
      <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
   <div class="col-md-12">
         <div class="card mb-4 bg-dark text-white p-3">
            <?php
            echo '<img style="filter: brightness(50%); max-height: 300px" class="card-img" src="data:image/jpeg;base64,'.base64_encode( $rows[2] ).'" alt="Card image">';
            ?>
             
            <div class="card-img-overlay p-4 ">
               <h3 class="card-title"><?php echo utf8_encode($rows[0]);?></h5>
              
               <p class="card-text">Last updated 3 mins ago</p> 
                
            </div> 
            <div class="p-4">
                <p class="card-text mb-0"><?php echo utf8_encode($rows[1])?></p>
               <a class="btn btn-outline-white btn-sm bg-primary text-white" role="button" href=<?php echo "'".SERVERURL."Hotel"."'"?>>Mas información</a>
            </div>

         </div>
      </div>
<?php } ?>

</div>
