<?php
	@session_start();
	if (@$_SESSION['login'] !== "Side Master"){
		echo "<script type='text/javascript'> alert('Usted no ha iniciado sesion'); window.location.href='security.php'; </script>";
	}

	include ("connect/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $_SESSION['username']; ?></title>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body onload="ejecutarajax();">
		<?php
			echo "<h1> Bienvenido: ".$_SESSION['username']." </h1><hr />";
		?>
		<div id="messages" class="message" style="padding: 10px; width: 253px; border: 1px solid #000;">

		</div>
		<div class="send">
				<form action="send.php" method="POST">
					<input type="text" name="message" size="28" placeholder="Write you message!." autofocus/>
					<button type="submit" name="send_message">Send</button>
				</form>
			</div>
		<hr/>
		<form action="logout.php" method="POST">
			<button type="submit" name="logout">Logout</button>
		</form>
	</body>
</html>