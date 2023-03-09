<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_pdd WHERE id_pend='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_pend" name="id_pend" value="<?php echo $data_cek['id_pend']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NIK</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nik" name="nik" value="<?php echo $data_cek['nik']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">TTL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="tempat_lh" name="tempat_lh" value="<?php echo $data_cek['tempat_lh']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_lh" name="tgl_lh" value="<?php echo $data_cek['tgl_lh']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kelamin</label>
				<div class="col-sm-3">
					<select name="jekel" id="jekel" class="form-control">
						<option value="">- Pilih -</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['jekel'] == "LK") echo "<option value='LK' selected>LK</option>";
                else echo "<option value='LK'>LK</option>";

                if ($data_cek['jekel'] == "PR") echo "<option value='PR' selected>PR</option>";
                else echo "<option value='PR'>PR</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="rw" value="<?php echo $data_cek['rw']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Agama</label>
				<div class="col-sm-3">
					<select name="agama" id="agama" class="form-control">
						<option value="">- Pilih -</option>
						<?php
                // mengecek data yg dipilih sebelumnya
                if ($data_cek['agama'] == "Islam") echo "<option value='Islam' selected>Islam</option>";
                else echo "<option value='Islam'>Islam</option>";

				if ($data_cek['agama'] == "Kristen Protestan") echo "<option value='Kristen Protestan' selected>Kristen Protestan</option>";
                else echo "<option value='Kristen Protestan'>Kristen Protestan</option>";

				if ($data_cek['agama'] == "Kristen Katolik") echo "<option value='Kristen Katolik' selected>Kristen Katolik</option>";
                else echo "<option value='Kristen Katolik'>Kristen Katolik</option>";

				if ($data_cek['agama'] == "Budha") echo "<option value='Budha' selected>Budha</option>";
                else echo "<option value='Budha'>Budha</option>";

				if ($data_cek['agama'] == "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                else echo "<option value='Hindu'>Hindu</option>";

                if ($data_cek['agama'] == "Konghucu") echo "<option value='Konghucu' selected>Konghucu</option>";
                else echo "<option value='Konghucu'>Konghucu</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Perkawinan</label>
				<div class="col-sm-3">
					<select name="kawin" id="kawin" class="form-control">
						<option value="">- Pilih Status -</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['kawin'] == "Sudah") echo "<option value='Sudah' selected>Sudah</option>";
                else echo "<option value='Sudah'>Sudah</option>";

                if ($data_cek['kawin'] == "Belum") echo "<option value='Belum' selected>Belum</option>";
				else echo "<option value='Belum'>Belum</option>";
				
				if ($data_cek['kawin'] == "Cerai Mati") echo "<option value='Cerai Mati' selected>Cerai Mati</option>";
                else echo "<option value='Cerai Mati'>Cerai Mati</option>";

                if ($data_cek['kawin'] == "Cerai Hidup") echo "<option value='Cerai Hidup' selected>Cerai Hidup</option>";
                else echo "<option value='Cerai Hidup'>Cerai Hidup</option>";
            ?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pekerjaan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $data_cek['pekerjaan']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
				<div class="col-sm-3">
					<select name="pendidikan" id="pendidikan" class="form-control">
						<option value="">- Pilih Status -</option>
						<?php
                //mengecek data yg dipilih sebelumnya
                if ($data_cek['pendidikan'] == "Tidak/Berhenti Sekolah") echo "<option value='Tidak/Berhenti Sekolah' selected>Tidak/Berhenti Sekolah</option>";
                else echo "<option value='Tidak/Berhenti Sekolah'>Tidak/Berhenti Sekolah</option>";

                if ($data_cek['pendidikan'] == "TK") echo "<option value='TK' selected>TK</option>";
				else echo "<option value='TK'>TK</option>";
				
				if ($data_cek['pendidikan'] == "SD") echo "<option value='SD' selected>SD</option>";
                else echo "<option value='SD'>SD</option>";

                if ($data_cek['pendidikan'] == "SMP/Sederajat") echo "<option value='SMP/Sederajat' selected>SMP/Sederajat</option>";
                else echo "<option value='SMP/Sederajat'>SMP/Sederajat</option>";

				if ($data_cek['pendidikan'] == "SMA/Sederajat") echo "<option value='SMA/Sederajat' selected>SMA/Sederajat</option>";
                else echo "<option value='SMA/Sederajat'>SMA/Sederajat</option>";

				if ($data_cek['pendidikan'] == "D1") echo "<option value='D1' selected>D1</option>";
                else echo "<option value='D1'>D1</option>";

				if ($data_cek['pendidikan'] == "D2") echo "<option value='D2' selected>D2</option>";
                else echo "<option value='D2'>D2</option>";

				if ($data_cek['pendidikan'] == "D3") echo "<option value='D3' selected>D3</option>";
                else echo "<option value='D3'>D3</option>";

				if ($data_cek['pendidikan'] == "D4") echo "<option value='D4' selected>D4</option>";
                else echo "<option value='D4'>D4</option>";

				if ($data_cek['pendidikan'] == "S1") echo "<option value='S1' selected>S1</option>";
                else echo "<option value='S1'>S1</option>";

				if ($data_cek['pendidikan'] == "S2") echo "<option value='S2' selected>S2</option>";
                else echo "<option value='S2'>S2</option>";

				if ($data_cek['pendidikan'] == "S3") echo "<option value='S3' selected>S3</option>";
                else echo "<option value='S3'>S3</option>";
            ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pend" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pdd SET 
		nik='".$_POST['nik']."',
		nama='".$_POST['nama']."',
		tempat_lh='".$_POST['tempat_lh']."',
		tgl_lh='".$_POST['tgl_lh']."',
		jekel='".$_POST['jekel']."',
		desa='".$_POST['desa']."',
		rt='".$_POST['rt']."',
		rw='".$_POST['rw']."',
		agama='".$_POST['agama']."',
		kawin='".$_POST['kawin']."',
		pekerjaan='".$_POST['pekerjaan']."',
		pendidikan='".$_POST['pendidikan']."'
		WHERE id_pend='".$_POST['id_pend']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pend';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pend';
        }
      })</script>";
    }}
