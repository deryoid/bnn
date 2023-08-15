<?php
require '../../config/config.php';
include '../../config/koneksi.php';

include '../../templates/head.php';
include '../../templates/navbar.php';
include '../../templates/sidebar.php';

$data = $koneksi->query("SELECT * FROM perusahaan WHERE id_user = '$_SESSION[id_user]'")->fetch_array();
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil Perusahaan</h1>
                </div>

            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Profil Perusahaan</h3>
                        </div>

                        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="saveformulir">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_perusahaan" required="" value="<?= $data['nama_perusahaan'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">NAMA PIMPINAN</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_pimpinan" required="" value="<?= $data['nama_pimpinan'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">EMAIL</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="email_perusahaan" required="" value="<?= $data['email_perusahaan'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">JENIS PERUSAHAAN</label>
                                    <div class="col-sm-8">
                                        <select class="form-control select2" data-placeholder="Pilih Jenis Kelamin" id="jenis" name="jenis" required="">
                                            <option value="CV" <?php if ($data['jenis'] == "CV") {
                                                                    echo "selected";
                                                                } ?>>CV</option>
                                            <option value="PT" <?php if ($data['jenis'] == "PT") {
                                                                    echo "selected";
                                                                } ?>>PT</option>
                                            <option value="LAINNYA" <?php if ($data['jenis'] == "LAINNYA") {
                                                                        echo "selected";
                                                                    } ?>>LAINNYA</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ALAMAT</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" class="form-control" name="alamat_perusahaan" required=""><?= $data['alamat_perusahaan'] ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Bidang</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="bidang" required="" value="<?= $data['bidang'] ?>">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">TELP/WA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="no_perusahaan" required="" value="<?= $data['no_perusahaan'] ?>">
                                    </div>
                                </div>


                            </div>

                            <div class="card-footer">
                                <button name="submit" class="btn btn-success"><i class="fa fa-save mr-2"></i>Tambah Informasi</button>
                                <!-- onclick="return saveformulir();" -->
                                <a href="../profil/" class="btn btn-default"><i class="fa fa-arrow-circle-left mr-2"></i>Batal</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include '../../templates/footer.php';
include '../../templates/script.php';

?>



<?php
if (isset($_POST['submit'])) {
    $nama_perusahaan            = $_POST['nama_perusahaan'];
    $nama_pimpinan           = $_POST['nama_pimpinan'];
    $email_perusahaan             = $_POST['email_perusahaan'];
    $jenis           = $_POST['jenis'];
    $alamat_perusahaan           = $_POST['alamat_perusahaan'];
    $bidang          = $_POST['bidang'];
    $no_perusahaan          = $_POST['no_perusahaan'];


    $submit = $koneksi->query("UPDATE perusahaan SET 
                            nama_perusahaan = '$nama_perusahaan',
                            nama_pimpinan = '$nama_pimpinan',
                            email_perusahaan = '$email_perusahaan',
                            jenis = '$jenis',
                            alamat_perusahaan = '$alamat_perusahaan',
                            bidang = '$bidang', 
                            no_perusahaan = '$no_perusahaan'
                            WHERE id_perusahaan = '$data[id_perusahaan]'");



    if ($submit) {
        $_SESSION['pesan'] = "Data Berhasil Diubah";
        echo "<script>window.location.replace('../profil/');</script>";
    }
}
?>