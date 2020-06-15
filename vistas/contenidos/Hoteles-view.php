
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>

<br>
<br>
<br>
<br>
<div class="container mt-2 text-center item-center">
      <div class="row ">
      <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
  

          <div class="col-md-8 mx-auto">
         <div class="card- mb-2 bg-dark text-white rounded">
            <?php
            echo '<img  class="card-img" style="filter: brightness(0.6); height:200px" src="data:image/jpeg;base64,'.base64_encode( $rows[3] ).'" alt="Card image">'
            ?>
            <div class="card-img-overlay">
               <h5 class="card-title text-light"><?php echo utf8_encode($rows[1]);?></h5>
               <p class="card-text"><?php echo utf8_encode($rows[2]);?></p>
               <a class="btn btn-primary btn-sm" role="button" href=<?php echo "'".SERVERURL."Hotel"."?Id_Hotel=".utf8_encode($rows[0])."'"?>>Continue reading</a>
            </div>
         </div>
      </div>

     
<?php } ?>

</div>


  </div>



