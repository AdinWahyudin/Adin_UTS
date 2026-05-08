<?php

$host = "localhost";
$user = "root";
$password = "root"; // sesuai phpMyAdmin
$database = "db_mahasiswa1";

$koneksi = mysqli_connect(
    $host,
    $user,
    $password,
    $database
);

if(!$koneksi){
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>
