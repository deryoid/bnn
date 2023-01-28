<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM masyarakat WHERE id_masyarakat = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "masyarakat Berhasil dihapus";
   echo "<script>window.location.replace('../masyarakat/');</script>";
}
