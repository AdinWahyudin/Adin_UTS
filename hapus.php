<?php

include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi,
"DELETE FROM mahasiswa WHERE id='$id'");

if($hapus){

    echo "
    <script>
        alert('Data berhasil dihapus');
        window.location='index.php';
    </script>
    ";

}

?>