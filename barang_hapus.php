<div align="center">
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

	echo "<h2>Konfirmasi Hapus</h2><hr>";
	echo "Nama Barang : ".$nama."<br />";
	echo "Harga Barang : ".$harga."<br />";
	echo "Stok : ".$stok."<br />";
	echo "Foto : <img src='thumb/".$foto."' /><br />";
	echo "APAKAH DATA INI AKAN DIHAPUS? <br /><hr>";
	echo "<a href='barang_hapus.php?idBarang=$idBarang&hapus=1' class='btn btn-primary'>YA</a>";
	echo "&nbsp;&nbsp;";
	echo "<a href='index.php?page=daftar_barang' class='btn btn-danger'>TIDAK</a><br /><br />";

	if (isset($_GET['hapus'])) {
		$sql = "delete from barang where idBarang = '$idBarang'";
		$hasil = mysqli_query($kon, $sql);
		if (!$hasil) {
			echo "Gagal Hapus Barang : $nama ..<br />";
			echo "<a href='barang_tampil.php'>Kembali ke Daftar Barang</a>";
		} else {
			$gbr = "pict/$foto";
			if (file_exists($gbr)) unlink($gbr);
			$gbr = "thumb/t_$foto";
			if (file_exists($gbr)) unlink ($gbr);
			header('location:index.php?page=daftar_barang'); 
		}
	}
?>
</div>