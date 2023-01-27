<?php
require 'config/config.php';
require 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<?php
include 'templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light  navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-green elevation-2" style="color: black;">
      <!-- dark-primary  -->
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?= base_url() ?>/assets/dist/img/bnn.png" style="width: 30px;" alt="#" class="brand-image" style="opacity: 12">
        <span class="brand-text font-weight-light" style="color: white;"><b>BNNP Kalsel</b></span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/logo.png" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <i>
            
          </i>
        </a>
      </div>
    </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?= base_url('index') ?>" class="nav-link">
                <i class="nav-icon fas fa-home" style="color: darkcyan;"></i>
                <p style="color: darkcyan;">
                  Beranda
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('login') ?>" class="nav-link">
                <i class="nav-icon fas fa-lock" style="color: darkcyan;"></i>
                <p style="color: darkcyan;">
                  Masuk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('register') ?>" class="nav-link">
                <i class="nav-icon fas fa-sign-in-alt" style="color: darkcyan;"></i>
                <p style="color: darkcyan;">
                  Mendaftar
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
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


          <div class="info-box bg-info">

            <div class="info-box-content text-center">
              <h3><span class="info-box-text">SELAMAT DATANG DI BNNP KALIMANTAN SELATAN </span></h3>
              <!-- <span class="info-box-number">41,410</span> -->
              <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
                <div class="alert alert-info info-alert" role="alert">
                  <small><i class="fa fa-check"> <?= $_SESSION['pesan']; ?></i></small>
                </div>
              <?php $_SESSION['pesan'] = '';
              } ?>
              <div class="progress">
                <!-- <div class="progress-bar" style="width: 70%"></div> -->
              </div>
              <span class="progress-description">
                <!-- 70% Increase in 30 Days -->
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>

          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <p><b style="font-size: 48;"></b>
                  </p>
                  <p style="text-align: justify;  text-justify: inter-word;">
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
                  </p>
                  <p>
                  <h1></h1>

                  </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <img src="<?= base_url() ?>/assets/dist/img/bnnkalsel.jpg" width="100%" class=" elevation-1" alt="User Image">
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-12">

          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
    <?php
    include 'templates/footer.php';
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
  include 'templates/script.php';
  ?>
</body>

</html>
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