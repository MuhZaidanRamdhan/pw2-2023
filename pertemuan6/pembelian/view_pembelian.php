<?php 
require_once '../dbkoneksi.php';
?>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM pembelian WHERE id=?";
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
            <td>tanggal</td>
            <td><?=$row['tanggal']?></td>
        </tr>
        <tr>
            <td>nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Produk id</td>
            <td><?=$row['produk_id']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['jumlah']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?=$row['harga']?></td>
        </tr>
        <tr>
            <td>Vendor</td>
            <td><?=$row['vendor_id']?></td>
        </tr>
    </tbody>
</table>
