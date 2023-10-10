<?php
require '../../config/config.php';
include '../../config/koneksi.php';
$id = $_GET['id'];
$tp = $koneksi->query("SELECT * FROM tim_pelaksana AS tp LEFT JOIN
penyuluhan AS p ON tp.id_penyuluhan = p.id_penyuluhan
WHERE tp.id_tp = '$id'")->fetch_array();

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
            <b style="font-size: 18;"><u>SURAT TUGAS</u></b> <br>
            <b style="font-size: 12;">NOMOR</b> : 0<?= $tp['id_tp']; ?>/BNNP.1/ST/<?= date('Y'); ?>
            <br>
            <br>
        </label>
    <table border="0" width="60%" cellpadding=" 1">
        <p style="text-align: justify; font-size: 15; ">Telah memberikan wewenang terhadap nama dibawah ini
            sebagaimana akan dilaksanakan kegiatan <?= $tp['nama_kegiatan']; ?> pada tanggal <?= tgl_indo($tp['tanggal_kegiatan']); ?>
            yang berlokasi <?= $tp['lokasi_kegiatan']; ?>, makan selaku Ketua Badan Narkotika Nasional Provinsi
            Kalimantan Selatan
            menugaskan nama dibawah :
        </p>
    </table>
    <div align="center">
        <table border="0" width="80%" style="text-align: left; font-size: 15; " cellpadding=" 1">
            <tr style="vertical-align: top;">
                <th width="8%">Nama</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['nama']) ?></b></td>
            </tr>
            <tr style="vertical-align: top;">
                <th width="8%">Tugas</th>
                <td>:</td>
                <td><b><?= strtoupper($tp['tugas']) ?></b></td>
            </tr>
        </table>
        <br>

    </div>
    <br>
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