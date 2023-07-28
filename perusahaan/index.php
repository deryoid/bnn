<?php
require '../config/config.php';
require '../config/koneksi.php';
require '../config/tglindo.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../templates/head.php';

$data = $koneksi->query("SELECT * FROM perusahaan WHERE id_user = '$_SESSION[id_user]'")->fetch_array();
?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php
    include '../templates/navbar.php';
    ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php
    include '../templates/sidebar.php';
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Perusahaan</h1>
            </div>

            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard </li>
              </ol>
            </div>

          </div>
        </div>
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <div class="alert alert-info" role="alert">
            <h5><b>
                <i class="fa fa-info-circle"></i>

                <?php

                echo "Selamat Datang " . $_SESSION['nama_perusahaan'];
                ?>

              </b></h5>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <center>
                    <img src="<?= base_url() ?>/assets/dist/img/bnnkalsel.jpg" height="100%" width="100%">
                    <!-- <iframe width="100%" height="432" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  </center>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card">
              <div class="card-body">

                <h1>
                  1. Visi<br>
                </h1>
                <h3>
                  Menjadi Lembaga Non Kementerian yang profesional dan mampu menggerakkan seluruh koponen masyarakat, bangsa dan negara Indonesia dalam melaksanakan Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkotika, Psikotropika, Prekursor dan Bahan Adiktif Lainnya di wilayah Kalimantan Selatan.<br>
                </h3>
                <h1>
                  2. Misi<br>
                </h1>
                <h3>
                  Bersama Instansi Pemerintah Daerah terkait, komponen masyarakat, bangsa, dan negara melaksanakan Pencegahan dan Pemberantasan Penyalahgunaan dan Peredaran Gelap Narkotika (P4GN) secara sinergis dan integratif di wilayah Kalimantan Selatan.
                </h3>
              </div>
            </div>
          </div>


        </div>
        <!-- /.row -->

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <?php
  include '../templates/footer.php';
  ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- Script -->
  <?php
  include '../templates/script.php';
  ?>
</body>

</html>