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
                            <h1 class="m-0 text-dark">PENDAFTARAN</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                                <li class="breadcrumb-item active">PENDAFTARAN</li>
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
                            <div class="card card-info card-outline">

                                <div class="card-header">
                                    <a href="tambah" class="btn bg-info"><i class="fa fa-plus-circle"> Pendaftaran/Pembuatan</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-success alertinfo" role="alert">
                                            <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    }
                                    ?>

                                    <?php
                                    $list = $koneksi->query("SELECT * FROM pendaftaran_pegawai AS p
                                            LEFT JOIN pegawai AS pl ON p.id_pegawai = pl.id_pegawai
                                            LEFT JOIN perusahaan AS pr ON pl.id_perusahaan = pr.id_perusahaan
                                            WHERE p.status_pendaftaran = 'Selesai' ORDER BY p.id_pendaftaran_pegawai DESC");
                                    ?>
                                    <div class="row">

                                        <?php foreach ($list as $l) { ?>

                                            <div class="card card-widget col-12">
                                                <div class="card-header" style="background-color:darkcyan;">
                                                    <div class="user-block">
                                                        <img class="img-circle" src="<?= base_url() ?>/assets/dist/img/bnn.png" alt="User Image">
                                                        <span class="username"><a href="#" style="color:white;">Pendaftaran</a></span>
                                                        <span class="description" style="color:white;">Tanggal pendaftaran <?php echo $l['tgl_pendaftaran']; ?></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                                            <i class="far fa-circle"></i></button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <tbody style="background-color: white">
                                                                    <ul>
                                                                        <b>
                                                                            <li>KTP : <br><img style="text-align: center;" width="250px" height="150px" src="<?= base_url() ?>/filektp/<?= $l['ktp'] ?>"></li>
                                                                            <li>PAS FOTO : <br><img style="text-align: center;" width="150px" height="250px" src="<?= base_url() ?>/filefoto/<?= $l['foto'] ?>"></li>
                                                                        </b>
                                                                    </ul>
                                                                </tbody>
                                                            </div>
                                                            <!-- /.card -->
                                                            <div class="col-6">
                                                                <h2><b>Nomor Antrian Anda : <?= $l['nomor_antrian'] ?></b></h2>
                                                                <h5>
                                                                    <li>Keterangan : <?= $l['ket'] ?></li>
                                                                    <li>Perihal : <?= $l['perihal'] ?></li>
                                                                    <li>Tanggal Dibuat :
                                                                        <?php
                                                                        if ($l['tgl_buat'] == NULL) {
                                                                            echo "<u>Menunggu Informasi</u>";
                                                                        } else {
                                                                            echo "Proses pembuatan pada, " . "<b>" . $l['tgl_buat'] . "</b>";
                                                                        }

                                                                        ?>
                                                                    </li>
                                                                    <li>Status : <b><?= $l['status_pendaftaran'] ?></b></li>
                                                                    <?php if ($l['status_pendaftaran'] == 'Dapat Diambil') { ?>
                                                                        <li>Tanggal Ambil : <b><?= $l['tgl_ambil'] ?></b></li>
                                                                    <?php } ?>
                                                                    <br>
                                                                    <?php if ($l['status_pendaftaran'] == 'Menunggu Antrian') { ?>
                                                                        <li><a href="hapus?id=<?= $l['id_pendaftaran'] ?>" class="btn btn-danger btn-sm alert-hapus" title="Hapus"><i class="fa fa-trash"></i> Batalkan Pendaftaran</a></li>
                                                                    <?php } else {
                                                                    } ?>

                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <!-- /.card -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- post text -->
                                        <?php } ?>

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