<?php

require_once "./core/configAPP.php";


class ModeloSQL extends mysqli
{
//variable de conexion
	protected $con=null;
	

	//constructor de la clase, en el modelo donde lo implementemo
	protected function __construct()
	{

		$this->con=mysqli_connect(SERVER,USER,PASS,DB);
	}

	//Para cerrar las conexiones
	protected function cerrar()
	{

		mysqli_close($this->con);

	}




	//funcion de encriptado basico
	public static function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
	//funcion de desencriptado basico
		public static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
	//nos aseguramos de evitar una inyeccion de codigo con esta funcion
	protected function limpiar_cadena($cadena){
		//trim elimina los espacios en blanco al inicio o final de una cadena
		$cadena=trim($cadena);
		//elimina las barras invertidas de un string
		$cadena=stripcslashes($cadena);
		//eliminamos posibles inyecciones de codigo
		$cadena=str_ireplace("<script>","",$cadena);
		$cadena=str_ireplace("</script>","",$cadena);
		$cadena=str_ireplace("<script src","",$cadena);
		$cadena=str_ireplace("<script type","",$cadena);
		$cadena=str_ireplace("SELECT * FROM","",$cadena);
		$cadena=str_ireplace("DELETE * FROM","",$cadena);
		$cadena=str_ireplace("INSERT INTO","",$cadena);
		$cadena=str_ireplace("REPLACE INTO","",$cadena);
		$cadena=str_ireplace("{",$cadena);
		$cadena=str_ireplace("}",$cadena);
		$cadena=str_ireplace("[",$cadena);
		$cadena=str_ireplace("]",$cadena);
		$cadena=str_ireplace("==",$cadena);
		return $cadena;
	}


	


}