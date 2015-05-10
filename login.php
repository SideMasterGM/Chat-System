<?php
	@session_start();
	if ($_SESSION['login'] != "Side Master"){
		header("Location: security.php");
	}

	if (isset($_POST['login'])){
		connect();
		$query = mysql_query("SELECT username, password FROM data;");
		while ($fila = mysql_fetch_array($query)){
			if ($_POST['username'] == $fila['username'] && $_POST['password'] == $fila['password']){
				$_SESSION['login'] = "Side Master";
				$_SESSION['username'] = $_POST['username'];
				header("Location: index.php");
			}
		}

		echo "<script> alert('Usuario no encontrado!.'); window.location.href='security.php'; </script>";

	} else if (isset($_POST['sign_in'])){
		connect();
		if (mysql_query("INSERT INTO data (id, username, password) VALUES ('','".$_POST['username']."','".$_POST['password']."');")){
			echo "<script type='text/javascript'> alert('Registro completado!.'); window.location.href='security.php'; </script>";
		} else {
			echo "<script type='text/javascript'> alert('Error en el registro: ".mysql_error()."!.'); window.location.href='security.php'; </script>";
		}
	}

	function connect(){
		include ("connect/connect.php");
	}

?>