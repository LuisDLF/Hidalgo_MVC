<?php 
	class vistasModelo{

		protected function obtener_vistas_modelo($vistas){
			$listaBlanca=["adminlist","Index"];
			if(in_array($vistas, $listaBlanca)){
				if(is_file("./vistas/contenidos/".$vistas."-view.php")){
					$contenido="./vistas/contenidos/".$vistas."-view.php";
				}else{
					$contenido="Index";
				}
			}else{
				$contenido="./vistas/contenidos/Index-view.php";
			}
			return $contenido;
		}
	}