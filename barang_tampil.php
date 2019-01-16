<?php
	$nama_barang = "";
	if (isset($_POST['nama_barang'])) 
		$nama_barang = $_POST['nama_barang'];

	include "koneksi3.php";
	$sql = "select * from barang where nama like'%".$nama_barang."' order by idbarang desc";

	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) 
		die("Gagal query..".mysqli_error($kon));
?>
<h1>DAFTAR BARANG</h1>
<a href="index.php?page=tambah_barang" class="btn btn-success"><i class="fa fa-plus fa-fw fa-lg" ></i> INPUT BARANG</a>
<a href="barang_cari.php" class="btn btn-primary">CARI BARANG</a>
<hr>
<table class="table table-bordered" id="example">
	<tr>
		<th>Foto</th>
		<th>Nama Barang</th>
		<th>Harga Jual</th>
		<th>Stock</th>
		<th>Operasi</th>
	</tr>
	<?php
		$no = 0;
		while ($row = mysqli_fetch_assoc($hasil)) {
			echo "<tr>";
			echo "<td><a href='pict/{$row['foto']}'>
			<img src='thumb/{$row['foto']}' width='100' /> 
			</a> </td>";
			echo "<td>".$row['nama']."</td>";
			echo "<td>".$row['harga']."</td>";
			echo "<td>".$row['stok']."</td>";
			echo "<td>";
				echo "<a href='index.php?page=edit&idBarang=".$row['idBarang']."' class='btn btn-primary'><i class='fa fa-edit fa-fw fa-lg' ></i> EDIT</a>";
				echo "&nbsp; &nbsp;";
				echo "<a href='index.php?page=hapus&idBarang=".$row['idBarang']."' class='btn btn-danger'><i class='fa fa-trash fa-fw fa-lg' ></i> HAPUS</a>";
			echo "</td>";
			echo "</tr>";
		}
	?>
</table>