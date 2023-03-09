<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Pendatang
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/pendatang/cetakdatang.php" method="post" enctype="multipart/form-data">
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
							<th>Jenis Kelamin</th>
							<th>Tanggal Datang</th>
							<th>Pelapor</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT d.*, p.* from 
			  			tb_datang d inner join tb_pdd p on d.pelapor=p.id_pend");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nama_datang']; ?></td>
								<td><?php echo $data['jekel']; ?></td>
								<td><?php echo $data['tgl_datang']; ?></td>
								<td><?php echo $data['nama']; ?></td>
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