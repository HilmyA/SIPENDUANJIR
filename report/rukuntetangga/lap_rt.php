<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Rukun Tetangga
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/rukuntetangga/cetakrt.php" method="post" enctype="multipart/form-data">
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
							<th>Ketua RT</th>
							<th>Nama RT</th>
							<th>Tanggal Menjabat</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT p.*, m.* from tb_rt m inner join tb_pdd p on p.id_pend=m.id_pdd");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td>0<?php echo $data['rt']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['tgl_menjabat']; ?></td>
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