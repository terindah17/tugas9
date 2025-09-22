<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            margin: 0;
            padding: 0;
            color: #fff;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background: rgba(0,0,0,0.4);
            padding: 20px;
            border-radius: 15px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            color: #000;
            border-radius: 10px;
            overflow: hidden;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        table th {
            background: #4e54c8;
            color: #fff;
        }
        a.btn {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 8px;
            color: #fff;
        }
        .tambah { background: #28a745; }
        .ubah { background: #ffc107; }
        .hapus { background: #dc3545; }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Barang</h2>
    <a href="tambah.php" class="btn tambah">+ Tambah Barang</a><br><br>
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM barang");
        while($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                    <td>{$row['id_barang']}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>{$row['stok']}</td>
                    <td>Rp " . number_format($row['harga'],0,',','.') . "</td>
                    <td>
                        <a href='ubah.php?id={$row['id_barang']}' class='btn ubah'>Ubah</a>
                        <a href='hapus.php?id={$row['id_barang']}' class='btn hapus' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
