<div class="send">
	<table border="1" width="99%">
	<?php
		include ("connect/connect.php");
		$query = mysql_query("SELECT message FROM chat ;");
		while ($file = mysql_fetch_array($query)){
			echo "
				<tr>
					<td>".$file['message']."</td>
				</tr>
			";
		}
	?>
	</table>
</div>