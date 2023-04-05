<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM vendor WHERE id=?";
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
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td><?=$row['kontak']?></td>
        </tr>
    </tbody>
</table>
