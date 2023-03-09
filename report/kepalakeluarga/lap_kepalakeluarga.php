<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Kepala Keluarga
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/kepalakeluarga/cetakkk.php" method="post" enctype="multipart/form-data">
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
							<th>NO KK</th>
							<th>Kepala Keluarga</th>
							<th>Desa</th>
							<th>RT/RW</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("select * from  tb_kk");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['no_kk']; ?></td>
								<td><?php echo $data['kepala']; ?></td>
								<td><?php echo $data['desa']; ?></td>
								<td>RT. <?php echo $data['rt']; ?> / RW. <?php echo $data['rw']; ?></td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<!-- /.card-body -->