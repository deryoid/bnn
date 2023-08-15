<?php
require '../../config/config.php';
include '../../config/koneksi.php';

include '../../templates/head.php';
include '../../templates/navbar.php';
include '../../templates/sidebar.php';

$data = $koneksi->query("SELECT * FROM perusahaan WHERE id_perusahaan = '$_SESSION[id_perusahaan]'")->fetch_array();
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
        <div class="col-12">
          <?php if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') { ?>
            <div class="alert alert-success success-alert" role="alert">
              <i class="fa fa-check"> <?= $_SESSION['pesan']; ?></i>
            </div>
          <?php }
          $_SESSION['pesan'] = ''; ?>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title float-right">
                <a href="edit" class="btn btn-success"><i class="fa fa-edit mr-1"></i>Update Profil Perusahaan</a>
                <!-- <a href="print?id=<?= $data['id_perusahaan']; ?>" class="btn btn-primary" target="blank"><i class="fa fa-print mr-1"></i>Print Biodata</a> -->
              </h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <!-- ./col -->
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">
                        <i class="fas fa-user"></i>
                        Profil Perusahaan
                      </h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                      <dl class="row">
                        <dt class="col-sm-4">Nama </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['nama_perusahaan']; ?></dd>
                        <dt class="col-sm-4">Pimpinan </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['nama_pimpinan']; ?></dd>
                        <dt class="col-sm-4">Jenis Perusahaan </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['jenis']; ?></dd>
                        <dt class="col-sm-4">Mail </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['email_perusahaan']; ?></dd>
                        <dt class="col-sm-4">Alamat </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['alamat_perusahaan']; ?></dd>
                        <dt class="col-sm-4">Bidang </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['bidang']; ?></dd>
                        <dt class="col-sm-4">TELP/WA </dt>
                        <dd class="col-sm-8"><?php echo ": " . $data['no_perusahaan']; ?></dd>
                        <dt class="col-sm-4">STATUS AKUN </dt>
                        <dd class="col-sm-8"> <?php echo ": <span class='badge badge-info fa fa-info-circle'> " . $data['status'] . "</span>"; ?></dd>

                      </dl>
                    </div>

                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <!-- <div class="col-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-image"></i>
                  Foto
                </h3>
              </div> 

              <div class="card-body">
                
                  <img style="text-align: center;" width="250px" height="300px" src="<?= base_url() ?>/fotomhs/<?= $data['foto'] ?>">
                
              </div> 

            </div>
          </div> -->
                <!-- ./col-->

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </section>

</div>

<?php
include '../../templates/footer.php';
include_once '../../templates/script.php';
?>