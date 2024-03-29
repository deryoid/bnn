<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM pendaftaran WHERE id_pendaftaran = '$id'");
$row  = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Proses Status</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Proses Status</li>
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
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Pendaftaran Baru</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">

                                        <div class="form-group row">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <b>
                                                                <td>
                                                                    <h2><b>Nomor Antrian Pendaftaran : <?= $row['nomor_antrian'] ?></b></h2>
                                                                </td>
                                                                <td>
                                                                    <ul>
                                                                        <li>KTP : <a href="<?= base_url(); ?>/filektp/<?= $row['ktp'] ?>" data-toggle="lightbox" data-title="ktp" data-gallery="galery" title="Lihat" target="blank"><i class="fa fa-file-archive"> Lihat KTP</i></a></li>

                                                                        <li>PAS FOTO : <a href="<?= base_url(); ?>/filefoto/<?= $row['foto'] ?>" data-toggle="lightbox" data-title="foto" data-gallery="galery" title="Lihat" target="blank"><i class="fa fa-file-archive"> Lihat Foto</i></a></li>

                                                                    </ul>
                                                                </td>
                                                                <hr>
                                                                <td><b>Keterangan : <?= $row['ket'] ?></b></td>
                                                                <td><b>Perihal : <?= $row['perihal'] ?></b></td>
                                                                <hr>
                                                                <td>Tanggal Pendaftaran :
                                                                    <?php
                                                                    if ($row['tgl_pendaftaran'] == NULL) {
                                                                        echo "<u>Menunggu Informasi</u>";
                                                                    } else {
                                                                        echo $row['tgl_pendaftaran'];
                                                                    }

                                                                    ?>
                                                                </td>
                                                                <td><b>Status : <?= $row['status_pendaftaran'] ?></b></td>
                                                                <td><b>Biaya : <?= $row['biaya'] ?></b></td> <br>
                                                            </b>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal Mulai Pembuatan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl_buat" value="<?= $row['tgl_buat'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Tanggal Pengambilan</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="tgl_ambil" value="<?= $row['tgl_ambil'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Hasil Tes</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" id="hasil_tes" name="hasil_tes">
                                                    <option value="">Pilih</option>
                                                    <option value="Negatif" <?php if ($row['hasil_tes'] == "Negatif") {
                                                                                echo "selected";
                                                                            } ?>>Negatif</option>
                                                    <option value="Positif" <?php if ($row['hasil_tes'] == "Positif") {
                                                                                echo "selected";
                                                                            } ?>>Positif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" data-placeholder="Pilih" id="status_pendaftaran" name="status_pendaftaran">
                                                    <option value="">Pilih</option>
                                                    <option value="Proses" <?php if ($row['status_pendaftaran'] == "Proses") {
                                                                                echo "selected";
                                                                            } ?>>Proses</option>
                                                    <option value="Selesai" <?php if ($row['status_pendaftaran'] == "Selesai") {
                                                                                echo "selected";
                                                                            } ?>>Selesai</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/antrian/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-check"> Proses</i></button>
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


    <?php
    if (isset($_POST['submit'])) {
        $tgl_buat        = $_POST['tgl_buat'];
        $tgl_ambil        = $_POST['tgl_ambil'];
        $hasil_tes        = $_POST['hasil_tes'];
        $status_pendaftaran        = $_POST['status_pendaftaran'];

        $submit = $koneksi->query("UPDATE pendaftaran SET  
                            tgl_buat = '$tgl_buat',
                            tgl_ambil = '$tgl_ambil',
                            hasil_tes = '$hasil_tes',
                            status_pendaftaran = '$status_pendaftaran'
                            WHERE 
                            id_pendaftaran = '$id'");
        // var_dump($submit, $koneksi->error);
        // die();
        if ($submit) {
            $_SESSION['pesan'] = "Data Sudah Diproses";
            echo "<script>window.location.replace('../antrian/');</script>";
        }
    }

    ?>

</body>

</html>