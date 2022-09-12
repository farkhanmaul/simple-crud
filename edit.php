<!DOCTYPE html>
<html>

<head>
  <title>Edit Data Siswa</title>
</head>

<body>
  <b>
    <h2>Edit Data</h2>
  </b>
  </thead>
  <?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "SELECT * FROM daftar_siswa where id='$id'");
  while ($d = mysqli_fetch_array($data)) {
  ?>
    <form method="post" action="update.php">
      <table>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
          </td>
        </tr>
        <tr>
          <td>Nis</to>
          <td>:</td>
          <td>
            <input type="number" name="nis" value="<?php echo $d['nis']; ?>">
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>
            <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Simpan">
            <button href="index.php">Batal</button>
          </td>
        </tr>
      </table>
    </form>
  <?php
  }
  ?>
</body>

</html>