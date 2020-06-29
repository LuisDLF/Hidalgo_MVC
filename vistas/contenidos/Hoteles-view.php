
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>



<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">Hoteles y Hospedaje</h1>
        <p class="lead">En Hidalgo Nuevo Leon</p>
      </div>
    </div>
  </div>
</header>

<!-- Page Content -->



<section> 
 <div class="offers_area">
        <div class="mt-5 container">
          

            <div class="row">
              <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
                <div class=" card col-xl-4 col-md-4">
                    <div class="card-body single_offers">
                        <div class="about_thumb">
                   
                               <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rows[3] ).'" alt="Card image">';?>
                        </div>
                        <h3><?php echo utf8_encode($rows[1]);?><br>
                            </h3>
                        <p>
                          <?php echo $rows["Descripcion"];?>
                        </p>
                        <a  class="book_now" href=<?php echo "'".SERVERURL."Hotel"."?Id_Hotel=".utf8_encode($rows[0])."'"?>>book now</a>
                    </div>
                </div>
               
              <?php } ?>
              
            </div>
        </div>
    </div>
</section>



 



