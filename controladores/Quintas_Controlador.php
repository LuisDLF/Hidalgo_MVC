<?php
	require_once "./modelos/Quintas_Modelo.php";
	

	class Quintas_Controlador extends Quintas_Modelo{


		public function Obtener_Quintas_Controlador(){
				$respuesta=Quintas_Modelo::Obtener_Quintas_Modelo();
				return $respuesta;
		}
		public function Obtain_CHouse_Controller(){
				$respuesta=Quintas_Modelo::Obtain_CHouse_Model();
				return $respuesta;
		}
	}