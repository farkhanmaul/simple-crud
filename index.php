<!DOCTYPE html>
<html lang="en">

<head>
  <title>
    Data-data Siswa
  </title>

</head>

<body>
  <br>
  <h2>Daftar Siswa</h2>
  <br>
  <button><a class="btn btn-primary" href="tambah.php" style="margin:15px;">Tambah Siswa</a></button>
  <div class="col-md-12">
    <table border="1" class="table">
      <thead>
        <br>
        <tr>
          <th class="text-center">No</th>
          <th class="text-center">Nama</th>
          <th class="text-center">NIS</th>
          <th class="text-center">Alamat</th>
          <th class="text- center">Opsi</th>
        </tr>
      </thead>
      <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM daftar_siswa");
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td class="text-center"><?php echo $no++ ?></td>
          <td class="text-center"><?php echo $d['nama']; ?></td>
          <td class="text-center"><?php echo $d['nis']; ?></td>
          <td class="text-center"><?php echo $d['alamat']; ?></td>
          <td class="text-center">
            <a class="btn btn-danger" href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
            <a class="btn btn-warning" href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
          </td>
        </tr>
      <?php
      }
      ?>

    </table>
  </div>


</body>

</html>
