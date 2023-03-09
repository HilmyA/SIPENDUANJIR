<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Laporan Jumlah Warga
		</h3>
	</div>
	<!-- /.card-header -->
	<form action="./report/warga/cetakwarga.php" method="post" enctype="multipart/form-data">
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
							<th>JK</th>
							<th>TTL</th>
							<th>Alamat</th>
							<th>Agama</th>
							<th>Pekerjaan</th>
							<th>Pendidikan</th>
							<th>KK</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						$sql = $koneksi->query("SELECT p.*, a.id_kk, k.* from 
			 		 				tb_pdd p left join tb_anggota a on p.id_pend=a.id_pend 
			  						left join tb_kk k on a.id_kk=k.id_kk WHERE status='Ada'");
						while ($data = $sql->fetch_assoc()) {
						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nik']; ?></td>
								<td><?php echo $data['nama']; ?></td>
								<td><?php echo $data['jekel']; ?></td>
								<td><?php echo $data['tempat_lh']; ?>,
									<?php echo $data['tgl_lh']; ?>
								</td>
								<td><?php echo $data['desa']; ?>, RT
									<?php echo $data['rt']; ?>/RW
									<?php echo $data['rw']; ?>
								</td>
								<td><?php echo $data['agama']; ?></td>
								<td><?php echo $data['pekerjaan']; ?></td>
								<td><?php echo $data['pendidikan']; ?></td>
								<td>
									<?php echo $data['no_kk']; ?> -
									<?php echo $data['kepala']; ?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
					</tfoot>
				</table>
			</div>
		</div>