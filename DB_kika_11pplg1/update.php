<?php
require "config.php";

$id     = $_POST['id'];
$nama   = $_POST['nama_lengkap'];
$kelas  = $_POST['nisn'];
$nisn   = $_POST['kelas'];
$jurusan= $_POST['jurusan'];

mysqli_query($koneksi, "UPDATE siswa SET 
    nama='$nama_lengkap', 
    nisn='$nisn',
    kelas='$kelas',
    jurusan='$jurusan'
    WHERE id='$id'
");

header("location:index.php");
?>