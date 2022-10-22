<?php
include "koneksi.php";
$id    = mysqli_real_escape_string($koneksi,$_GET['id']);
$query = mysqli_query($koneksi,"DELETE FROM pengumuman WHERE id='$id' ");
header('location:tampil_pengumuman.php?pesan=hapus-berhasil');
?>