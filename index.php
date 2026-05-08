<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi,
    "INSERT INTO mahasiswa(nim,nama,jurusan,alamat)
    VALUES('$nim','$nama','$jurusan','$alamat')");

    if($query){
        echo "
        <script>
            alert('Data berhasil disimpan');
            window.location='index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Mahasiswa</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>CRUD Data Mahasiswa</h1>

    <div class="form-container">

        <h2>Tambah Data</h2>

        <form action="" method="POST">

            <label>NIM</label>
            <input type="text" name="nim">

            <label>Nama</label>
            <input type="text" name="nama">

            <label>Jurusan</label>
            <input type="text" name="jurusan">

            <label>Alamat</label>
            <textarea name="alamat"></textarea>

            <button type="submit" name="simpan">
                Simpan
            </button>

        </form>

    </div>

    <div class="table-container">

        <h2>Data Mahasiswa</h2>

        <table>

            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

            <?php

            $no = 1;

            $data = mysqli_query($koneksi,
            "SELECT * FROM mahasiswa");

            while($row = mysqli_fetch_array($data)){

            ?>

            <tr>

                <td><?php echo $no++; ?></td>

                <td><?php echo $row['nim']; ?></td>

                <td><?php echo $row['nama']; ?></td>

                <td><?php echo $row['jurusan']; ?></td>

                <td><?php echo $row['alamat']; ?></td>

                <td>

                    <a href="edit.php?id=<?php echo $row['id']; ?>">
                        <button class="edit-btn">
                            Edit
                        </button>
                    </a>

                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="hapus-link">

                        <button class="hapus-btn">
                            Hapus
                        </button>

                    </a>

                </td>

            </tr>

            <?php
            }
            ?>

        </table>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>