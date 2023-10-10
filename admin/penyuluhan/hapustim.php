<?php

require '../../config/config.php';
require '../../config/koneksi.php';


$id    = $_GET['id'];
$idh    = $_GET['idh'];
$hapus = $koneksi->query("DELETE FROM tim_pelaksana WHERE id_tp = '$id'");

session_start();
if ($hapus) {
   $_SESSION['pesan'] = "Data Berhasil Dihapus";
   echo "<script>window.location.replace('../penyuluhan/detail?id=$idh');</script>";
}
