<?php

function conexion()
	{
		$host='localhost';
		$user='root';
		$pass='';
		$db='oilipisa';

		$conexion=mysqli_connect($host,$user,$pass,$db);

		return $conexion;
	}

	//if (conexion()) {
		//echo 'conectado';
	//}else {
		//echo 'Error';
	//}

?>