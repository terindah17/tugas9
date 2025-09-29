<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">hywgtrswftsuhstwgfysg
    <title>Tambah Barang</title>
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
            background: #28a745;
            color: white;
            cursor: pointer;
        }
        a { color: #fff; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h2>Tambah Barang</h2>
    <form method="post">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <br>
    <a href="index.php">← Kembali</a>
</div>

<?php

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama_barang'];
    $stok  = $_POST['stok'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama', '$stok', '$harga')";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: index.php");
        exit;
    }
}
?>


?>
</body>
</html>
