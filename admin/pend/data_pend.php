<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Warga
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pend" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Warga</a>
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
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					$sql = $koneksi->query("SELECT p.*, a.id_kk, k.no_kk, k.kepala from 
			  tb_pdd p left join tb_anggota a on p.id_pend=a.id_pend 
			  left join tb_kk k on a.id_kk=k.id_kk WHERE status='Ada'");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nik']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['jekel']; ?></td>
							<td><?php echo $data['tempat_lh']; ?>, <?php echo $data['tgl_lh']; ?></td>
							<td><?php echo $data['desa']; ?>, RT<?php echo $data['rt']; ?> / RW<?php echo $data['rw']; ?></td>
							<td><?php echo $data['agama']; ?></td>
							<td><?php echo $data['pekerjaan']; ?></td>
							<td><?php echo $data['pendidikan']; ?></td>
							<td><?php echo $data['no_kk']; ?> - <?php echo $data['kepala']; ?></td>
							<td>
								<a href="?page=view-pend&kode=<?php echo $data['id_pend']; ?>" title="Detail" class="btn btn-info btn-sm">
									<i class="fa fa-user"></i></a>
								<a href="?page=edit-pend&kode=<?php echo $data['id_pend']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i></a>
								<a href="?page=del-pend&kode=<?php echo $data['id_pend']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
									<i class="fa fa-trash"></i></a>
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
	<!-- /.card-body -->