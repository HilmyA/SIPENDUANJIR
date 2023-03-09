<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Kelahiran
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/kelahiran/cetaklahir.php" method="post" enctype="multipart/form-data">
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
							<th>Nama</th>
							<th>Tgl Lahir</th>
							<th>Jekel</th>
							<th>Anak Dari</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT l.id_lahir, l.nama, l.tgl_lh, l.jekel, k.no_kk, k.kepala from 
			  tb_lahir l inner join tb_kk k on k.id_kk=l.id_kk");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['tgl_lh']; ?></td>
								<td><?php echo $data['jekel']; ?></td>
								<td><?php echo $data['no_kk']; ?> - <?php echo $data['kepala']; ?></td>
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