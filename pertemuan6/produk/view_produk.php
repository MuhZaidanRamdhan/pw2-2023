<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>Kode</td>
            <td><?=$row['kode']?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><?=$row['harga_jual']?></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><?=$row['harga_beli']?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?=$row['stok']?></td>
        </tr>
        <tr>
            <td>Minimum Stok</td>
            <td><?=$row['min_stok']?></td>
        </tr>
        <tr>
            <td>Jenis Produk</td>
            <td><?=$row['jenis_produk_id']?></td>
        </tr>
    </tbody>
</table>
