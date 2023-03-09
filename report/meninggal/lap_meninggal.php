<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Meninggal
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/meninggal/cetakmendu.php" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<div class="table-responsive">
				<div>
					<input target="_blank" type="submit" name="Cetak" value="Cetak" class="btn btn-info"></input>
				</div>
				<br>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama</th>
							<th>Tanggal Lahir</th>
							<th>Tanggal Meninggal</th>
							<th>Usia</th>
							<th>Sebab</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT p.*, m.* from 
			  		tb_mendu m inner join tb_pdd p on p.id_pend=m.id_pdd");
						while ($data = $sql->fetch_assoc()) {

							$tgllahir = $data['tgl_lh'];
							$tglmendu = $data['tgl_mendu'];
							$umur = new DateTime($tgllahir);
							$mendu = new DateTime($tglmendu);
							$usia = $mendu->diff($umur);
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<th><?php echo $data['tgl_lh']; ?></th>
								<td><?php echo $data['tgl_mendu']; ?></td>
								<td><?php echo $usia->y . "&nbsp" . "Tahun" ?></td>
								<td><?php echo $data['sebab']; ?></td>
							</tr>
						<?php
						}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- /.card-body -->