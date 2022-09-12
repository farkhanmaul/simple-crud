<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM daftar_siswa where id='$id'");
header("location: index.php");
