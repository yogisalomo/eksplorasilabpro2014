<?php
	$username = Cookie::get('username');
?>


<left>
	<table style="width:600px" border="0">
		<tr>
			<td rowspan="2">Ini foto avatar user</td>
			<td><hr>Nama: <?php echo $username ?><br>
					Umur: umur<br>
					Email: email<br>
					Reputasi: angka
				<hr></td>
		</tr>
		<tr>
			<td><a href="http://localhost/ClickandBuy/userview/isiPM">Lihat Private Message<hr></a></td>
		</tr>
	</table>
</left>
