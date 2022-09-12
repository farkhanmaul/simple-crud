<!DOCTYPE html>
<html>

<head>
  <title> Tambah Siswa</title>
</head>

<body>
  <b>
    <h2>Tambah Siswa</h2>
  </b>
  <form method="post" action="proses_tambah.php">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Nis</td>
        <td>:</td>
        <td><input type="number" name="nis"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Tambah">
          <button href="index.php">Batal</a></button>
        </td>
      </tr>
    </table>
  </form>
  <?php
  @$PAGE = $_GET['page'];
