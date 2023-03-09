<?php
include "../../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LAPORAN WARGA</title>
    <link rel="stylesheet" href="../laporan.css" type="text/css">
</head>

<body>
    <table class="tabelkop">
        <thead>
            <tr>
                <th class="logokiri"><img src="../../dist/img/logo.png" width="60"></th>
                <th class="koptengah">
                    <h3>
                        KABUPATEN KAPUAS<br>
                        KECAMATAN KAPUAS TIMUR<br>
                        DESA ANJIR MAMBULAU TIMUR
                    </h3>
                    <h5>Jalan Trans Kalimantan, Anjir Serapat Km.6.5, <b>Kode Pos: 73581</b></h5>
                <th class="kopkanan"></th>
                </th>
            </tr>
        </thead>
    </table>
    <hr />

    <p>LAPORAN JUMLAH WARGA HIDUP</p>

    <table class="tabelisi">
        <thead>
            <tr>
                <th class="judul">No</th>
                <th class="judul">NIK</th>
                <th class="judul">Nama</th>
                <th class="judul">JK</th>
                <th class="judul">TTL</th>
                <th class="judul">Alamat</th>
                <th class="judul">Agama</th>
                <th class="judul">Pekerjaan</th>
                <th class="judul">Pendidikan</th>
                <th class="judul">KK</th>
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
                    <td class="data"><?php echo $no++; ?>.</td>
                    <td class="data"><?php echo $data['nik']; ?></td>
                    <td class="data"><?php echo $data['nama']; ?></td>
                    <td class="data"><?php echo $data['jekel']; ?></td>
                    <td class="data"><?php echo $data['tempat_lh']; ?>,
                        <?php echo $data['tgl_lh']; ?>
                    </td>
                    <td class="data"><?php echo $data['desa']; ?>, RT
                        <?php echo $data['rt']; ?>/RW
                        <?php echo $data['rw']; ?>
                    </td>
                    <td class="data"><?php echo $data['agama']; ?></td>
                    <td class="data"><?php echo $data['pekerjaan']; ?></td>
                    <td class="data"><?php echo $data['pendidikan']; ?></td>
                    <td class="data">
                        <?php echo $data['no_kk']; ?> -
                        <?php echo $data['kepala']; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <br>
    <br>
    <br>
    <table class="tabelttd">
        <thead>
            <tr>
                <th class="kiri"> <br> </th>
                <th class="tengah"></th>
                <th class="kanan">
                    <br>Anjir Serapat, <?php echo date('d F Y'); ?>
                    <br> Kepala Desa Anjir Mambulau Timur
                    <br>
                    <br>
                    <br>
                    <br>
                    <br><b><u>RAHMAN EFFENDIE</u></b>
                </th>
            </tr>
        </thead>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>