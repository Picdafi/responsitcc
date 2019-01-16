<h1>REKAP PENJUALAN BARANG</h1>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA PEMBELI</th>
			<th>EMAIL</th>
			<th>NO TELP</th>
			<th>#</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			include "koneksi3.php";
			$no = 1;
			$sql_jual = "SELECT * FROM hjual a INNER JOIN djual b ON a.idHjual=b.idHjual";
			$load_data = mysqli_query($kon, $sql_jual);

			while ($hasil = mysqli_fetch_array($load_data)) {
				echo "<tr>";
				echo "<td>".$no++."</td>";
				echo "<td>$hasil[namacust]</td>";
				echo "<td>$hasil[email]</td>";
				echo "<td>$hasil[notelp]</td>";
				echo "<td><a href='index.php?page=hasil&idhjual=".$hasil['idHjual']."' class='btn btn-primary'>Detail</a></td>";
			}
		?>
	</tbody>
</table>