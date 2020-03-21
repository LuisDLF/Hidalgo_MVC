<?php
require_once "ModeloSQL.php";

/**
 * 
 */
class Quintas_Modelo extends ModeloSQL
{
	
	function __construct()
	{
		parent::__construct();
	}

	protected function Obtener_Quintas_Modelo()
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		$result = mysqli_query($this->con, "CALL Obtener_Quintas");
		$this->cerrar(); 
	return $result;
	}
	protected function Obtain_CHouse_Model()
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		$result = mysqli_query($this->con, "CALL Obtain_CHouse");
		$this->cerrar(); 
	return $result;
	}

}