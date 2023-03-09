<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT r.id_rt, r.rt, r.tgl_menjabat, p.id_pend, p.nama, p.rt from 
		tb_rt r inner join tb_pdd p on r.id_pdd=p.id_pend WHERE id_rt='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data RT</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-3">
					<input type='text' class="form-control" id="id_rt" name="id_rt" value="<?php echo $data_cek['id_rt']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ketua RT</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama RT</label>
				<div class="col-sm-6">
					<select name="id_pdd" id="id_pdd" class="form-control select2bs4" required>
						<option selected="">- Pilih -</option>
						<?php
                        // ambil data dari database
                        $query = "select * from tb_pdd";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                        ?>
						<option value="<?php echo $row['id_pend'] ?>" <?=$data_cek[
						 'id_pend']==$row[ 'id_pend'] ? "selected" : null ?>>
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
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Menjabat</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_menjabat" name="tgl_menjabat" value="<?php echo $data_cek['tgl_menjabat']; ?>"
					 required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-rt" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php
	if (isset ($_POST['Ubah'])){
		$sql_ubah = "UPDATE tb_rt SET 
			rt='".$_POST['rt']."',
			tgl_menjabat='".$_POST['tgl_menjabat']."',
			id_pdd='".$_POST['id_pdd']."'
			WHERE id_rt='".$_POST['id_rt']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
		mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-rt';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-rt';
        }
      })</script>";
    }
}
