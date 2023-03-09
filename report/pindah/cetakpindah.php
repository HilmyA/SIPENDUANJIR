<?php
include "../../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LAPORAN PINDAH</title>
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

    <p>LAPORAN WARGA PINDAH</p>

    <table class="tabelisi">
        <thead>
            <tr>
                <th class="judul">No</th>
                <th class="judul">NIK</th>
                <th class="judul">Nama</th>
                <th class="judul">Tanggal Pindah</th>
                <th class="judul">Alasan</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT p.*, d.* from 
			  			tb_pindah d inner join tb_pdd p on p.id_pend=d.id_pdd");
            while ($data = $sql->fetch_assoc()) {
            ?>

                <tr>
                    <td class="data"><?php echo $no++; ?>.</td>
                    <td class="data"><?php echo $data['nik']; ?></td>
                    <td class="data"><?php echo $data['nama']; ?></td>
                    <td class="data"><?php echo $data['tgl_pindah']; ?></td>
                    <td class="data"><?php echo $data['alasan']; ?></td>
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