<?php

function conexion()
	{
		$host='localhost';
		$user='root';
		$pass='';
		$db='insercion_laboral';

		$conexion=mysqli_connect($host,$user,$pass,$db);

		return $conexion;
	}

	//if (conexion()) {
		//echo 'conectado';
	//}else {
		//echo 'Error';
	//}

?>