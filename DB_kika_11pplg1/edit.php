<?php 
require "config.php";
$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    <input type="text" name="nama_lengkap" value="<?= $d['nama_lengkap']; ?>" required>
    <input type="text" name="nisn" value="<?= $d['nisn']; ?>" required>
    <input type="text" name="kelas" value="<?= $d['kelas']; ?>" required>

    <select name="jurusan">
        <option <?= ($d['jurusan']=="PPLG")? "selected":""; ?>>PPLG</option>
        <option <?= ($d['jurusan']=="TKJ")? "selected":""; ?>>TKJ</option>
        <option <?= ($d['jurusan']=="PM")? "selected":""; ?>>PM</option>
        <option <?= ($d['jurusan']=="DKV")? "selected":""; ?>>DKV</option>
        <option <?= ($d['jurusan']=="MPLB")? "selected":""; ?>>MPLB</option>
    </select>

    <button type="submit">Update</button>
</form>

</body>
</html>