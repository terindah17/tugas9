<?php include "koneksi.php"; 
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: #fff;
        }
        .container {
            width: 50%;
            margin: 60px auto;
            background: rgba(0,0,0,0.5);
            padding: 20px;
            border-radius: 15px;
        }
        h2 { text-align: center; }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 6px 0;
            border-radius: 8px;
            border: none;
        }
        button {
            background: #ffc107;
            color: #000;
            cursor: pointer;
        }
        a { color: #fff; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h2>Ubah Barang</h2>
    <form method="post">
        <input type="text" name="nama_barang" value="<?= $row['nama_barang']; ?>" required>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" required>
        <input type="number" name="harga" value="<?= $row['harga']; ?>" required>
        <button type="submit" name="ubah">Ubah</button>
    </form>
    <br>
    <a href="index.php">← Kembali</a>
</div>

<?php
if (isset($_POST['ubah'])) {
    $nama = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "UPDATE barang SET nama_barang='$nama', stok='$stok', harga='$harga' WHERE id_barang='$id'";
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
    }
}
?>
</body>
</html>
