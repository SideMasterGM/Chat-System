<?php
	include ("connect/connect.php");
	mysql_query("INSERT INTO chat (id, message) VALUES ('','".$_POST['message']."');");
	header("Location: index.php");
?>