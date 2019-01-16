<?php
	$barang_pilih = 0;

	if (isset($_COOKIE['keranjang'])) {
		$barang_pilih = $_COOKIE['keranjang'];
	}
	if (isset($_GET['idBarang'])) {
		$idBarang = $_GET['idBarang'];
		$barang_pilih = $barang_pilih.",".$idBarang;
		setcookie('keranjang',$barang_pilih, time()+3600);
	}

	include "koneksi3.php";

	$sql = "SELECT * FROM barang WHERE idBarang NOT IN (".$barang_pilih.") AND stok > 0 ORDER BY idBarang DESC";

	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) 
		die("Gagal query..".mysqli_error($kon));
?>
<h2>DAFTAR BARANG TERSEDIA</h2>

<table class="table table-bordered">
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
				echo "<a href='".$_SERVER['PHP_SELF']."?page=keranjang&idBarang=".$row['idBarang']."' class='btn btn-primary'><i class='fa fa-cart-plus'></i> BELI</a>";
			echo "</td>";
			echo "</tr>";
		}
	?>
</table>