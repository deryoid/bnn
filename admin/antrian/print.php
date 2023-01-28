<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA </title>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead class="bg-info">
                        <tr align="center">
                            <th>No.</th>
                            <th>Nomor Antrian</th>
                            <th>Nama</th>
                            <th>KTP</th>
                            <th>PAS FOTO</th>
                            <th>Ket</th>
                            <th>Perihal</th>
                            <th>Tanggal</th>
                            <th>Tanggal</th>
                            <th>Hasil Tes</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $data = $koneksi->query("SELECT * FROM pendaftaran AS p
                    LEFT JOIN masyarakat AS pl ON p.id_masyarakat = pl.id_masyarakat");
                    while ($row = $data->fetch_array()) {
                    ?>
                        <tbody style="background-color: white">
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td align="center">
                                    <h1><?= $row['nomor_antrian'] ?></h1>
                                </td>
                                <td align="center">
                                    <h4><?= $row['nama_masyarakat'] ?></h4>
                                </td>
                                <td> &#10003;</td>
                                <td>&#10003;</td>
                                <td><?= $row['ket'] ?></td>
                                <td><?= $row['perihal'] ?></td>
                                <td>Tanggal Pendaftaran : <?= $row['tgl_pendaftaran'] ?>Tanggal
                                </td>
                                <td>Ambil : <?= $row['tgl_ambil'] ?></td>
                                <td align="center"><b><?= $row['hasil_tes'] ?></b></td>
                                <td align="center"><b><?= $row['status_pendaftaran'] ?></b></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <br>

    </div>

    </div>
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