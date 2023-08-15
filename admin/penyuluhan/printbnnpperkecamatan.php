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
                            <th>No</th>
                            <th>Nama Kecamatan </th>
                            <th>Jumlah Negatif</th>
                            <th>Jumlah Positif</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    $data = $koneksi->query("SELECT p.hasil_tes = 'Negatif' AS phn,p.hasil_tes = 'Positif' AS php, k.nama_kecamatan FROM pendaftaran AS p
                    LEFT JOIN kecamatan AS k ON p.id_kecamatan = k.id_kecamatan
                    ");
                    // $row1 = mysqli_num_rows($data1);
                    // $row2 = mysqli_num_rows($data2);
                    while ($row = $data->fetch_array()) {
                    ?>
                        <tbody style="background-color: white">
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['nama_kecamatan'] ?></td>
                                <td><?= $row['phn'] ?></td>
                                <td><?= $row['php'] ?></td>
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