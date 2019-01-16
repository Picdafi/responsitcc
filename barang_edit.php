<?php
	$idBarang = $_GET['idBarang'];

	include "koneksi3.php";

	$sql = "select * from barang where idBarang = '$idBarang'";
	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) die ("Gagal query");

	$data = mysqli_fetch_array($hasil);
	$nama = $data['nama'];
	$harga = $data['harga'];
	$stok = $data['stok'];
	$foto = $data['foto'];

?>

<h2>.::EDIT BARANG::.</h2>
<form action="index.php?page=proses" method="post" enctype="multipart/form-data">
	<input type="hidden" name="idBarang" value="<?php echo "$idBarang"; ?>" />
	<table border="0">
		<tr>
			<td>Nama Barang</td>
			<td><input type="text" name="nama" value="<?php echo "$nama"; ?>" required></td>
		</tr>
		<tr>
			<td>Harga Jual</td>
			<td><input type="text" name="harga" value="<?php echo "$harga"; ?>" required></td>
		</tr>
		<tr>
			<td>Stok</td>
			<td><input type="text" name="stok" value="<?php echo "$stok"; ?>" required></td>
		</tr>
		<tr>
			<td>Gambar [max=1.5MB]</td>
			<td>
				<input type="file" name="foto" />
				<input type="hidden" name="foto_lama" value="<?php echo "$foto"; ?>" required><br/>
				<img src="<?php echo "thumb/".$foto; ?>" width="100px" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Simpan" name="proses" class="btn btn-primary">
				<input type="reset" value="Reset" name="reset" class="btn btn-danger">
			</td>
		</tr>
	</table>
</form>