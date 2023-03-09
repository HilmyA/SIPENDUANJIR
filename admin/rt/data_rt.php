<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Rukun Tetangga
		</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-rt" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah RT</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Ketua RT</th>
						<th>Nama RT</th>
						<th>Tgl Menjabat</th>
						<th>Warganya</th>
						<th>Aksi</th>
					</tr>
				</thead>

				<tbody>
					<?php
					$no = 1;
					$sql = $koneksi->query("SELECT p.id_pend, p.nama, p.pekerjaan, p.pendidikan, m.rt, m.tgl_menjabat, m.id_rt from 
			  tb_rt m inner join tb_pdd p on p.id_pend=m.id_pdd");
					while ($data = $sql->fetch_assoc()) {
					?>

						<tr>
							<!-- MENAMPILKAN RT, NAMA RT DAN TANGGAL MENJABAT -->
							<td><?php echo $no++; ?></td>
							<td>0<?php echo $data['rt']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['tgl_menjabat']; ?></td>
							<!-- MENAMPILKAN DATA WARGANYA -->
							<td>
								<a href="?page=wargart&kode=<?php echo $data['id_rt']; ?>" title="Warga RT" class="btn btn-info btn-sm">
									<i class="fa fa-users"></i></a>
							</td>
							<!-- MENAMPILKAN EDIT DAN DELETE DATA RT -->
							<td>
								<a href="?page=edit-rt&kode=<?php echo $data['id_rt']; ?>" title="Ubah" class="btn btn-success btn-sm">
									<i class="fa fa-edit"></i></a>
								<a href="?page=del-rt&kode=<?php echo $data['id_rt']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm">
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