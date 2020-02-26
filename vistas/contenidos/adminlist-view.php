
<?php
require_once "./controladores/Hoteles_Controlador.php";

$hoteles=new Hoteles_Controlador();
$resultado=$hoteles->Obtener_Hoteles_Controlador();

?>

<div class="container">
   <h3 class="pb-3 mb-4 font-italic border-bottom text-white">
      Hoteles en Hidalgo
   </h3>

      <?php    
      while ($rows = mysqli_fetch_array($resultado)){   ?>
   <div class="row">
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-primary">World</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">40 Percent of People Can’t Afford Basics</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 12</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-primary btn-sm" role="button" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/arch" style="width: 200px; height: 250px;">
         </div>
      </div>
      <div class="col-md-6">
         <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
               <strong class="d-inline-block mb-2 text-success">Health</strong>
               <h6 class="mb-0">
                  <a class="text-dark" href="#">Food for Thought: Diet and Brain Health</a>
               </h6>
               <div class="mb-1 text-muted small">Nov 11</div>
               <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
               <a class="btn btn-outline-success btn-sm" href="http://www.jquery2dotnet.com/">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="//placeimg.com/250/250/nature" style="width: 200px; height: 250px;">
         </div>
      </div>
   </div>
<?php } ?>
</div>