<aside class="main-sidebar sidebar-light elevation-2">
  <!-- dark-primary  -->
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>/assets/dist/img/bnn.png" style="width: px;" alt="#" class="brand-image" style="opacity: .8">
    <span class="font-weight-light"><b>BNNP KALSEL</b></span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>/assets/dist/img/bnn.png" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php
          if ($_SESSION['role'] == "Administrator") {
            echo "Administrator";
          } elseif ($_SESSION['role'] == "Masyarakat") {
            echo $_SESSION['nama_masyarakat'];
          } elseif ($_SESSION['role'] == "Perusahaan") {
            echo $_SESSION['nama_perusahaan'];
          }
          ?>
        </a>
      </div>
    </div>




    <?php if ($_SESSION['role'] == "Administrator") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user') ?>" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kecamatan') ?>" class="nav-link">
                  <i class="fas fa-map-marker nav-icon"></i>
                  <p>Kecamatan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/penyuluhan') ?>" class="nav-link">
              <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Penyuluhan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/masyarakat') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Masyarakat
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('admin/antrian') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Keterangan Hasil Tes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/antrianperusahaan') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Hasil Tes Kolektif
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/user/print') ?>" target="blank" class="nav-link">
                  <p>Info User (Admin)</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kecamatan/print') ?>" target="blank" class="nav-link">
                  <p>Kecamatan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/masyarakat/print') ?>" target="blank" class="nav-link">
                  <p>Masyarakat</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/antrian/printnegatif') ?>" target="blank" class="nav-link">
                  <p>Negatif</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/antrian/printpositif') ?>" target="blank" class="nav-link">
                  <p>Positif</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/kecamatan/printbnnpperkecamatan.php') ?>" target="blank" class="nav-link">
                  <p>Rekap BNNP Kecamatan</p>
                </a>
              </li>
            </ul>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->



    <?php } elseif ($_SESSION['role'] == "Masyarakat") { ?>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('masyarakat/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Profil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('masyarakat/biodata') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Biodata
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('masyarakat/biodata/ubahpw') ?>" class="nav-link">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>
                    Ganti Password
                  </p>
                </a>
              </li>
            </ul>
          </li>


          <?php
          $data = $koneksi->query("SELECT * FROM masyarakat WHERE id_masyarakat = '$_SESSION[id_masyarakat]'")->fetch_array();
          if ($data['status'] == 'Tidak Aktif' or $data['status'] ==  NULL) {
          } else {
          ?>
            <li class="nav-item">
              <a href="<?= base_url('masyarakat/pendaftaran') ?>" class="nav-link">
                <i class="nav-icon fas fa-address-card"></i>
                <p>
                  Pendaftaran/Pengajuan
                </p>
              </a>
            </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->

    <?php } elseif ($_SESSION['role'] == "Perusahaan") { ?>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('perusahaan/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>
                Profil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('perusahaan/profil') ?>" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Profil Perusahaan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('perusahaan/profil/ubahpw') ?>" class="nav-link">
                  <i class="nav-icon fas fa-lock"></i>
                  <p>
                    Ganti Password
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="<?= base_url('perusahaan/pegawai') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pegawai
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('perusahaan/pendaftaran') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Pendaftaran/Pengajuan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('perusahaan/hasil') ?>" class="nav-link">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Hasil Tes
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->


    <?php } elseif ($_SESSION['role'] == "Owner") { ?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('owner/index') ?>" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?= base_url('owner/antrian') ?>" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Antrian Baru
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('owner/prosesantrian') ?>" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Proses Pengerjaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('owner/prosespengambilan') ?>" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Pengambilan
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <?php } ?>
  </div>
  <!-- /.sidebar -->
</aside>