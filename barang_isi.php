<div class="container">
	<h2>.::FORM ISI BARANG ::.</h2>
<form action="index.php?page=proses" class="form-horizontal" method="post" enctype="multipart/form-data">
	<table class="table" width="70%">
		<tr>
			<td width="30%">Nama Barang</td>
			<td width="70%"><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" name="harga" required></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="text" name="stok" required></td>
		</tr>
		<tr>
			<td>Gambar [max=1.5MB]</td>
			<td><input type="file" name="foto" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Simpan" name="proses" class="btn btn-primary" />
				<input type="reset" value="Reset" name="reset" class="btn btn-danger" />
			</td>
		</tr>
	</table>
</form>

</div>
