<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM pegawai WHERE id_pegawai = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "pegawai Berhasil dihapus";
   echo "<script>window.location.replace('../pegawai/');</script>";
}
