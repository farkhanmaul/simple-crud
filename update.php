<?php
include 'koneksi.php';

$ID = mysqli_real_escape_string($koneksi, $_POST['id']);
$NAMA = mysqli_real_escape_string($koneksi, $_POST['nama']);
$NIS = mysqli_real_escape_string($koneksi, $_POSTI['nis']);
$ALAMAT = mysqli_real_escape_string($koneksi, $_POST['alamat']);
mysqli_query($koneksi, "UPDATE daftar_siswa SET nama='$NAMA', nis='$NIS', alamat='$ALAMAT' WHERE id='$ID' ");
header("location: index.php");
