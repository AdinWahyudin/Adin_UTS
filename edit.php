<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM mahasiswa WHERE id='$id'");

$row = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $update = mysqli_query($koneksi,
    "UPDATE mahasiswa SET

    nim='$nim',
    nama='$nama',
    jurusan='$jurusan',
    alamat='$alamat'

    WHERE id='$id'
    ");

    if($update){

        echo "
        <script>
            alert('Data berhasil diupdate');
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
    <title>Edit Data</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="POST">

        <label>NIM</label>
        <input type="text"
        name="nim"
        value="<?php echo $row['nim']; ?>">

        <label>Nama</label>
        <input type="text"
        name="nama"
        value="<?php echo $row['nama']; ?>">

        <label>Jurusan</label>
        <input type="text"
        name="jurusan"
        value="<?php echo $row['jurusan']; ?>">

        <label>Alamat</label>
        <textarea name="alamat"><?php echo $row['alamat']; ?></textarea>

        <button type="submit" name="update">
            Update
        </button>

    </form>

</div>

</body>
</html>