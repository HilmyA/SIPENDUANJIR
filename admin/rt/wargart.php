<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT r.*, p.* from 
		tb_rt r inner join tb_pdd p on r.id_pdd=p.id_pend WHERE id_rt='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		$datart=$data_cek['id_rt'];
    }
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-users"></i> Warga RT</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
			<input type='hidden' class="form-control" id="id_rt" name="id_rt" value="<?php echo $data_cek['id_rt']; ?>"
			 readonly/>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT | Nama Ketua RT</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					 readonly/>
				</div>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Warga</label>
				<div class="col-sm-4">
					<select name="id_pend" id="id_pend" class="form-control select2bs4" required>
						<option selected="selected">- Penduduk -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_pdd where status='Ada'";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_pend'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama'] ?>
							-
							<?php echo $row['rt'] ?>
						</option>
						<?php
                        }
                        ?>
					</select>
				</div>

				<div class="col-sm-3">
					<select name="usia" id="usia" class="form-control">
						<option>- Usia -</option>
						<option>Anak-Anak</option>
						<option>Remaja</option>
						<option>Dewasa</option>
						<option>Tua</option>
						<option>Lansia</option>
					</select>
				</div>
				
				<input type="submit" name="Simpan" value="Tambah" class="btn btn-success">
			</div>

			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Pekerjaan</th>
								<th>Pendidikan</th>
								<th>Usia</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>

				<?php

              $no = 1;
			  $sql = $koneksi->query("SELECT  p.*, w.* from tb_pdd p inner join tb_wargart w
			  on p.id_pend=w.id_pend where status='Ada' and id_rt=$datart");
              while ($data= $sql->fetch_assoc()) {
            ?>
			
							<tr>
								<td>
									<?php echo $no++; ?>
								</td>
								<td>
									<?php echo $data['nama']; ?>
								</td>
								<td>
									<?php echo $data['jekel']; ?>
								</td>
								<td>
									<?php echo $data['pekerjaan']; ?>
								</td>
								<td>
									<?php echo $data['pendidikan']; ?>
								</td>
								<td>
									<?php echo $data['usia'];?>
								</td>

								<td>
							<a href="?page=del-wargart&kode=<?php echo $data['id_wargart']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
								</a>
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
		</div>
		<div class="card-footer">
			<a href="?page=data-rt" title="Kembali" class="btn btn-warning">Kembali</a>
		</div>
	</form>
</div>

<?php

if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
        $sql_simpan = "INSERT INTO tb_wargart (id_rt, id_pend, usia) VALUES (
             '".$_POST['id_rt']."',
            '".$_POST['id_pend']."',
			'".$_POST['usia']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=wargart&kode=".$_POST['id_rt']."';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=wargart&kode=".$_POST['id_rt']."';
          }
      })</script>";
    }}
     //selesai proses simpan data
