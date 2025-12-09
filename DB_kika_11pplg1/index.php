<?php 
 require "config.php"; 
 ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .form-box {
            width: 350px;
            padding: 20px;
            background: #f8f8f8;
            border-radius: 5px;
        }
        input, select, button {
            padding: 10px;
            width: 100%;
            margin: 5px 0;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th { background: #4CAF50; color: white; }
        a {
            padding: 5px 10px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
        }
        .edit { background: orange; }
        .hapus { background: red; }
    </style>
</head>
<body>

<h2>Form Input Siswa</h2>

<div class="form-box">
    <form action="simpan.php" method="POST">
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
        <input type="text" name="nisn" placeholder="NISN" required>
        <input type="text" name="kelas" placeholder="Kelas" required>

        <select name="jurusan" required>
            <option value="">-- Pilih Jurusan --</option>
            <option>PPLG</option>
            <option>TKJ</option>
            <option>PM</option>
            <option>DKV</option>
            <option>MPLB</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</div>

<h2>Data Siswa</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NISN</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </tr>

    <?php
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM siswa");
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['nama_lengkap']; ?></td>
        <td><?= $d['nisn']; ?></td>
        <td><?= $d['kelas']; ?></td>
        <td><?= $d['jurusan']; ?></td>
        <td>
            <a class="edit" href="edit.php?id=<?= $d['id']; ?>">Edit</a>
            <a class="hapus" href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>