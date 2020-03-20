<?php
	require_once "./modelos/Hoteles_Modelo.php";
	

	class Hoteles_Controlador extends Hoteles_Modelo{


		public function Obtener_Hoteles_Controlador(){
				$respuesta=Hoteles_Modelo::Obtener_Hoteles_Modelo();
				return $respuesta;
		}
		public function Obtain_Hotels_Controller(){
				$respuesta=Hoteles_Modelo::Obtain_Hotels_Model();
				return $respuesta;
		}
	}