
<?php
require_once "./controladores/Hoteles_Controlador.php";


$hoteles=new Hoteles_Controlador();
if(Idioma=="es"){
$resultado=$hoteles->Obtener_Hoteles_Controlador();
}elseif (Idioma=="en") {
$resultado=$hoteles->Obtain_Hotels_Controller();
}

?>

<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center" style="background-image: url(./vistas/assets/banner/banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Montana Resort</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center" style="background-image: url(./vistas/assets/banner/banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center justify-content-center" style="background-image: url(./vistas/assets/banner/banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Montana Resort</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center justify-content-center" style="background-image: url(./vistas/assets/banner/banner.png);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Life is Beautiful</h3>
                                <p>Unlock to enjoy the view of Martine</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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



