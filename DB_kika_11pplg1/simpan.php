<?php
require "config.php";

$nama   = $_POST['nama_lengkap'];
$kelas  = $_POST['nisn'];
$nisn   = $_POST['kelas'];
$jurusan= $_POST['jurusan'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES('$nama_lengkap', '$nisn', '$kelas', '$jurusan')");

header("location:index.php");
?>