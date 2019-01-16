<h2>DATA PEMBELI BARANG</h2>
<form action='simpan_beli.php' method='post'>
	<table >
		<tr>
			<td>Nama</td>
			<td>: <input type="text" name="namacust" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>No. Telp</td>
			<td>: <input type="text" name="notelp" required></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="SIMPAN" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
<?php
	include_once("keranjang_belanja.php");
?>