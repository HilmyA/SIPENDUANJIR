<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Pindah
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/pindah/cetakpindah.php" method="post" enctype="multipart/form-data">
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
							<th>Tanggal Pindah</th>
							<th>Alasan</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT p.*, d.* from tb_pindah d inner join tb_pdd p on p.id_pend=d.id_pdd");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['tgl_pindah']; ?></td>
								<td><?php echo $data['alasan']; ?></td>
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