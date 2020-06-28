
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>
<section class="mt-5"> 
 <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        
                        <h3>Hospedajes en Hidalgo</h3>

                    </div>
                </div>
            </div>

            <div class="row">
              <?php    
      while ($rows = mysqli_fetch_array($resultado)){ 
      ?>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="vistas/assets/offers/1a.png" alt="">
                        </div>
                        <h3><?php echo utf8_encode($rows[1]);?><br>
                            </h3>
                        <ul>
                            <li>.</li>
                            <li>.</li>
                            <li>.</li>
                        </ul>
                        <a  class="book_now" href=<?php echo "'".SERVERURL."Hotel"."?Id_Hotel=".utf8_encode($rows[0])."'"?>>book now</a>
                    </div>
                </div>
              <?php } ?>
              
            </div>
        </div>
    </div>
</section>



 



