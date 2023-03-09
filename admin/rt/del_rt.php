<?php
if(isset($_GET['kode'])){
            $sql_hapus = "DELETE FROM tb_rt WHERE id_rt='".$_GET['kode']."'";
            $query_hapus = mysqli_query($koneksi, $sql_hapus);

            if ($query_hapus) {
                // JIKA BERHASIL HAPUS
                echo "<script>
                Swal.fire({title: 'Hapus Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-rt';
                    }
                })</script>";
                }else{
                // JIKA GAGAL HAPUS
                echo "<script>
                Swal.fire({title: 'Hapus Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        window.location = 'index.php?page=data-rt';
                    }
                })</script>";
            }
            // SELESAI
        }

