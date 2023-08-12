<?php
require '../../config/config.php';
require '../../config/koneksi.php';
require '../../config/day.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include '../../templates/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../../templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Hasil Tes Pegawai Kolektif</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Data Master</a></li> -->
                                <li class="breadcrumb-item active">Hasil Tes Pegawai Kolektif</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <a href="print" target="blank" class="btn bg-info"><i class="fa fa-print"> Cetak</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-info alertinfo" role="alert">
                                            <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-info">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nomor Antrian</th>
                                                    <th>Kolektif</th>
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
                                            $data = $koneksi->query("SELECT * FROM pendaftaran_pegawai AS p
                                            LEFT JOIN pegawai AS pl ON p.id_pegawai = pl.id_pegawai
                                            LEFT JOIN perusahaan AS pr ON pl.id_perusahaan = pr.id_perusahaan
                                            ");
                                            while ($row = $data->fetch_array()) {
                                            ?>
                                                <tbody style="background-color: white">
                                                    <tr>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td align="center">
                                                            <h1><?= $row['nomor_antrian'] ?></h1>
                                                        </td>
                                                        <td align="center">
                                                            <h3><?= $row['nama_perusahaan'] ?></h3>
                                                        </td>
                                                        <td align="center">
                                                            <h4><?= $row['nama_pegawai'] ?></h4>
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url(); ?>/filektp/<?= $row['ktp'] ?>" data-toggle="lightbox" data-title="ktp" data-gallery="galery" title="Lihat" target="blank"><i class="fa fa-file-archive"> Lihat KTP</i></a>
                                                        </td>
                                                        <td> <a href="<?= base_url(); ?>/filefoto/<?= $row['foto'] ?>" data-toggle="lightbox" data-title="foto" data-gallery="galery" title="Lihat" target="blank"><i class="fa fa-file-archive"> Lihat Foto</i></a></td>
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
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../templates/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../templates/script.php"; ?>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>

</body>

</html>