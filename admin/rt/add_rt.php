<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data RT</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="rt" name="rt" placeholder="RT 00" required>
				</div>
			</div>

			<!-- NAMA PENDUDUK YANG JADI RT DI TABEL PENDUDUK -->
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama RT</label>
				<div class="col-sm-6">
					<select name="id_pdd" id="id_pdd" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Penduduk -</option>
						<?php

				// ambil data dari database tabel penduduk
				$query = "select * from tb_pdd where status='Ada'";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_pend'] ?>">
							<?php echo $row['nik'] ?>
							-
							<?php echo $row['nama'] ?>
						</option>
						<?php
				}
				?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Menjabat</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tgl_menjabat" name="tgl_menjabat" required>
				</div>
			</div>
			<!-- SELESAI -->

		<!-- BUTTON SIMPAN -->
		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-rt" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>
		<!-- SELESAI -->

		<!-- PROSES MENYIMPAN -->
<?php

    if (isset ($_POST['Simpan'])){
    //MULAI PROSES SIMPAN
        $sql_simpan = "INSERT INTO tb_rt (rt, id_pdd, tgl_menjabat) VALUES (
            '".$_POST['rt']."',
            '".$_POST['id_pdd']."',
            '".$_POST['tgl_menjabat']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-rt';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-rt';
          }
      })</script>";
    }}
	//SELESAI 
