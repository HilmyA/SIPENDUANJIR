<?php
include "../../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>LAPORAN KK</title>
	<link rel="stylesheet" href="../laporan.css" type="text/css">
</head>

<body>
	<table class="tabelkop">
		<thead>
			<tr>
				<th class="logokiri"><img src="../../dist/img/logo.png" width="60"></th>
				<th class="koptengah">
					<h3>
						KABUPATEN KAPUAS<br>
						KECAMATAN KAPUAS TIMUR<br>
						DESA ANJIR MAMBULAU TIMUR
					</h3>
					<h5>Jalan Trans Kalimantan, Anjir Serapat Km.6.5, <b>Kode Pos: 73581</b></h5>
				<th class="kopkanan"></th>
				</th>
			</tr>
		</thead>
	</table>
	<hr />

	<p>LAPORAN KEPALA KELUARGA</p>

	<table class="tabelisi">
		<thead>
			<tr>
				<th class="judul">No</th>
				<th class="judul">No KK</th>
				<th class="judul">Kepala Keluarga</th>
				<th class="judul">Desa</th>
				<th class="judul">RT/RW</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$no = 1;
			$sql = $koneksi->query("select * from  tb_kk");
			while ($data = $sql->fetch_assoc()) {
			?>

				<tr>
					<td class="data"><?php echo $no++; ?>.</td>
					<td class="data"><?php echo $data['no_kk']; ?></td>
					<td class="data"><?php echo $data['kepala']; ?></td>
					<td class="data"><?php echo $data['desa']; ?></td>
					<td class="data">RT. <?php echo $data['rt']; ?> / RW. <?php echo $data['rw']; ?></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>

	<br>
	<br>
	<br>
	<table class="tabelttd">
		<thead>
			<tr>
				<th class="kiri"> <br> </th>
				<th class="tengah"></th>
				<th class="kanan">
					<br>Anjir Serapat, <?php echo date('d F Y'); ?>
					<br> Kepala Desa Anjir Mambulau Timur
					<br>
					<br>
					<br>
					<br>
					<br><b><u>RAHMAN EFFENDIE</u></b>
				</th>
			</tr>
		</thead>
	</table>

	<script>
		window.print();
	</script>

</body>

</html>