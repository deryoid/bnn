<?php
require '../../config/config.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
$tp = $koneksi->query("SELECT * FROM pendaftaran AS p
LEFT JOIN masyarakat AS pl ON p.id_masyarakat = pl.id_masyarakat 
WHERE p.id_pendaftaran = '$id'")->fetch_array();

?>
<script type="text/javascript">
    window.print();
</script>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Surat Tugas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="#">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> -->

    <style>
        .kop {
            text-align: center;
        }
    </style>
</head>

<body>
    <img src="<?= base_url('assets/dist/img/bnn.png') ?>" align="left" width="90" height="100">
    <p align="center"><b>
            <font size="5">BADAN NARKOTIKA NASIONAL</font><br>
            <font size="5">PROVINSI KALIMANTAN SELATAN</font> <br>
            <font size="2">Alamat : Jl. D.I. Panjaitan No. 41 Banjarmasin</font>
            <br>
            <br>
            <br>
            <hr size="2px" color="black">
        </b></p>

    <p style="text-align: center; margin-top: 2%;">
        <label>
            <b style="font-size: 18;"><u>SURAT KETERANGAN HASIL TES NARKOBA</u></b> <br>
            <b style="font-size: 12;">NOMOR</b> : 00<?= $tp['id_pendaftaran']; ?>/BNNP/<?= date('Y'); ?>
            <br>
            <br>
        </label>
    <table border="0" width="60%" cellpadding=" 1">
        <p style="text-align: justify; font-size: 15; ">
            Dengan ini menerangkan bahwa
        </p>
    </table>
    <div align="center">
        <table border="0" width="80%" style="text-align: left; font-size: 15; " cellpadding=" 1">
            <tr style="vertical-align: top;">
                <th width="8%">Nama</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['nama_masyarakat']) ?></b></td>
            </tr>
            <tr style="vertical-align: top;">
                <th width="8%">NIK</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['nik']) ?></b></td>
            </tr>
            <tr style="vertical-align: top;">
                <th width="8%">JK</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['jk']) ?></b></td>
            </tr>
            <tr style="vertical-align: top;">
                <th width="8%">Alamat</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['alamat']) ?></b></td>
            </tr>
            <tr style="vertical-align: top;">
                <th width="8%">Pekerjaan</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['pekerjaan']) ?></b></td>
            </tr>
        </table>
        <br>

    </div>
    <br>
    <table border="0" width="60%" cellpadding=" 1">
        <p style="text-align: justify; font-size: 15; "> Berdasarkan hasil pemeriksaan di laboratorium Badan Narkotika Nasional Provinsi
            Kalimantan Selatan menyatakan bahwa nama diatas dinyatakan <b><u><?= $tp['hasil_tes'] ?></u> Narkotika/Narkoba</b> .
        </p>
    </table>
    <table border="0" width="60%" cellpadding=" 1">
        <p style="text-align: justify; font-size: 15; ">Dengan Ini menyatakan bahwa surat yang dibuat dengan benar.
            Atas perhatian diucapkan terima kasih.
        </p>
    </table>


    <br>
    <div style="text-align: center; display: inline-block; float: right;">
        <h5>
            Banjarmasin , <?php echo tgl_indo(date('Y-m-d')); ?><br>

            <br><br><br><br>
            Kepala BNNP Kalsel
        </h5>

    </div>


</body>

</html>
<script>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    ?>
</script>