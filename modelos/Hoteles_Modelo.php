<?php
require_once "ModeloSQL.php";

/**
 * 
 */
class Hoteles_Modelo extends ModeloSQL
{
	
	function __construct()
	{
		parent::__construct();
	}

	protected function Obtener_Hoteles_Modelo()
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		$result = mysqli_query($this->con, "CALL Obtener_Hoteles");
		$this->cerrar(); 
	return $result;
	}
	protected function Obtain_Hotels_Model()
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		$result = mysqli_query($this->con, "CALL Obtain_Hotels");
		$this->cerrar(); 
		return $result;
	}

}