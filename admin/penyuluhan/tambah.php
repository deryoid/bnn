<?php
require '../../config/config.php';
require '../../config/koneksi.php';
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
                            <h1 class="m-0 text-dark">Penyuluhan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Master</li>
                                <li class="breadcrumb-item active">Penyuluhan</li>
                                <li class="breadcrumb-item active">Tambah Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card card-green">
                                    <div class="card-header">
                                        <h3 class="card-title">Penyuluhan</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nama_kegiatan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Tanggal Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" name="tanggal_kegiatan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Lokasi Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="lokasi_kegiatan" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="deskripsi_kegiatan" required="">
                                            </div>
                                        </div>




                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/penyuluhan/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
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
    </script>
    <?php
    if (isset($_POST['submit'])) {
        $nama_kegiatan = $_POST['nama_kegiatan'];
        $tanggal_kegiatan = $_POST['tanggal_kegiatan'];
        $lokasi_kegiatan = $_POST['lokasi_kegiatan'];
        $deskripsi_kegiatan = $_POST['deskripsi_kegiatan'];

        $submit = $koneksi->query("INSERT INTO penyuluhan VALUES (
        NULL,
        '$nama_kegiatan',
        '$tanggal_kegiatan',
        '$lokasi_kegiatan',
        '$deskripsi_kegiatan'
        )");
        // var_dump($submit, $koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Berhasil Ditambahkan";
            echo "<script>window.location.replace('../penyuluhan/');</script>";
        }
    }

    ?>
</body>

</html>