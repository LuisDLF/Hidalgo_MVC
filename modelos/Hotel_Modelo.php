<?php
require_once "ModeloSQL.php";

/**
 * 
 */
class Hotel_Modelo extends ModeloSQL
{
	
	function __construct()
	{
		parent::__construct();
	}

	protected function Obtener_Hotel_Modelo($Id_Hotel)
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		mysqli_query($this->con,"SET @p0='".$Id_Hotel."'");
		$result = mysqli_query($this->con, "CALL Obtener_Hotel(@p0)");
		$rows = mysqli_fetch_array($result);
		$this->cerrar(); 
	return $rows;
	}
	protected function Obtain_Hotel_Model($Id_Hotel)
	{
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		//connect to database
		mysqli_query($this->con,"SET @p0='".$Id_Hotel."'");
		$result = mysqli_query($this->con, "CALL Obtain_Hotel");
		$rows = mysqli_fetch_array($result);
		$this->cerrar(); 
	return $rows;
	}

}