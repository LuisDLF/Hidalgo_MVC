<?php
	require_once "./modelos/Hotel_Modelo.php";
	

	class Hotel_Controlador extends Hotel_Modelo{


		public function Obtener_Hotel_Controlador($Id_Hotel){
				$respuesta=Hotel_Modelo::Obtener_Hotel_Modelo($Id_Hotel);
				return $respuesta;
		}
		public function Obtain_Hotel_Controller($Id_Hotel){
				$respuesta=Hoteles_Modelo::Obtain_Hotel_Model($Id_Hotel);
				return $respuesta;
		}
	}