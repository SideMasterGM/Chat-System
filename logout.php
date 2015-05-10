<?php
	@session_start();
	if ($_SESSION['login'] != "Side Master"){
		header("Location: security.php");
	} else {
		if (isset($_POST['logout'])){
			@session_destroy();
			header("Location: security.php");
		}
	}
?>