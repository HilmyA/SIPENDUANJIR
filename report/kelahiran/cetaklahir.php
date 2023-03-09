<?php
include "../../inc/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>LAPORAN KELAHIRAN</title>
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

    <p>LAPORAN WARGA BARU LAHIR</p>

    <table class="tabelisi">
        <thead>
            <tr>
                <th class="judul">No</th>
                <th class="judul">Nama</th>
                <th class="judul">Tanggal Lahir</th>
                <th class="judul">Jenis Kelamin</th>
                <th class="judul">Anak Dari</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            $sql = $koneksi->query("SELECT l.*, k.* from 
			  tb_lahir l inner join tb_kk k on k.id_kk=l.id_kk");
            while ($data = $sql->fetch_assoc()) {
            ?>

                <tr>
                    <td class="data"> <?php echo $no++; ?>.</td>
                    <td class="data"><?php echo $data['nama']; ?></td>
                    <td class="data"><?php echo $data['tgl_lh']; ?></td>
                    <td class="data"><?php echo $data['jekel']; ?></td>
                    <td class="data"><?php echo $data['no_kk']; ?> - <?php echo $data['kepala']; ?></td>
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