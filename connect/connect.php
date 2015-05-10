<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "chat";

	$connect = mysql_connect($host, $user, $pass);

	if ($connect){
		$select_db = mysql_select_db($db, $connect);
		if (!$select_db){
			echo "<script type='text/javascript'> alert('Error al seleccionar la base de datos: ' + ".mysql_error()."); </script>";
			mysql_query("CREATE DATABASE ".$db.";");
			if (mysql_select_db($db, $connect)){
				$create_table = " CREATE TABLE data (
						id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						username VARCHAR(50) NOT NULL, 
						password VARCHAR(50) NOT NULL, 
						message VARCHAR(255) NOT NULL
					);
				";
				if (mysql_query($create_table, $connect)){
					echo "<script type='text/javascript'> alert('Conectado con exito!.'); </script>";
				}
			}
		}
	} else {
		echo "<script type='text/javascript'> alert('Error al conectar con el servidor: ' + ".mysql_error()."); </script>";
	}

?>