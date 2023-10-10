<?php
require '../../config/config.php';
require '../../config/koneksi.php';
require '../../config/day.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM penyuluhan WHERE id_penyuluhan = '$id'")->fetch_array();
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
                            <h1 class="m-0 text-dark">Kegiatan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                                <li class="breadcrumb-item active">Kegiatan</li>
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
                            <div class="card card-orange card-outline">
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
                                    <div class="card-header">
                                        <label for="">Nama Kegiatan : <?= $data['nama_kegiatan'] ?></label><br>
                                        <label for="">Tanggal Kegiatan : <?= $data['tanggal_kegiatan'] ?></label><br>
                                        <label for="">Lokasi Kegiatan : <?= $data['lokasi_kegiatan'] ?></label><br>
                                        <label for="">Deskripsi Kegiatan : <?= $data['deskripsi_kegiatan'] ?></label>
                                    </div>
                                    <br>
                                    <a href="tim?id=<?= $id ?>" class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-plus"></i> Tambah Penyuluh</a>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead class="bg-orange">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>Nama Kegiatan</th>
                                                    <th>Nama</th>
                                                    <th>Tugas</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody style="background-color: white">
                                                <?php
                                                $no = 1;
                                                $data = $koneksi->query("SELECT * FROM tim_pelaksana AS tp LEFT JOIN
                                                penyuluhan AS k ON tp.id_penyuluhan = k.id_penyuluhan WHERE tp.id_penyuluhan = '$id'
                                                ");
                                                while ($row = $data->fetch_array()) {
                                                ?>
                                                    <tr>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td><?= $row['nama_kegiatan'] ?></td>
                                                        <td><?= $row['nama'] ?></td>
                                                        <td><?= $row['tugas'] ?> |
                                                            <a href="surattugas?id=<?= $row['id_tp'] ?>" target="blank" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-print"></i> Cetak Surat Tugas</a>
                                                        </td>
                                                        <td align="center">
                                                            <a href="hapustim?id=<?= $row['id_tp'] ?>&idh=<?= $id ?>" class="btn btn-danger btn-sm alert-hapus" title="Hapus"><i class="fa fa-trash"></i> Hapus Penyuluh</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
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
<!-- MODAL LAPORAN SURAT MASUK -->
<div id="rekap_harian" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
                <h4 class="modal-title">Rekap Harian</h4>
            </div>
            <div class="modal-body">

                <!-- kategori -->
                <label style="font-size: 15px; font-style: bold;">Berdasarkan Lokasi</label>
                <form method="POST" target="blank" action="<?= base_url('admin/rekap_harian/print.php') ?>">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <select class="form-control" data-placeholder="Pilih" name="lokasi_rh" required="">
                                    <option value="">-Pilih-</option>
                                    <option value="MARABAHAN">MARABAHAN</option>
                                    <option value="LIANG ANGGANG">LIANG ANGGANG</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="c1" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end kategori -->

            </div><!-- modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
            </div>
        </div>
    </div>
</div>