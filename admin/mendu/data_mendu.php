<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kematian
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-mendu" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>NIK</th>
						<th>Nama</th>
						<th>Tgl Lahir</th>
						<th>Tgl Meninggal</th>
						<th>Usia</th>
						<th>Sebab</th>
						<th>Aksi</th>
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
							<td><?php echo $usia->y. "&nbsp". "Tahun"; ?></td>
							<td><?php echo $data['sebab']; ?></td>
							<td>
								<a href="?page=edit-mendu&kode=<?php echo $data['id_mendu']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i></a>
								<a href="?page=del-mendu&kode=<?php echo $data['id_mendu']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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