<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM pembelian";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_pembelian.php" role="button">Create Pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk_id</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor_id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $id  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nomor'] ?></td>
                <td><?= $row['produk_id'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['vendor_id'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view_pembelian.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="form_pembelian.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary" href="delete_pembelian.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Kartu <?=$row['id']?>?')) {return false}"
                >Delete</a>
                </td>
            </tr>
        <?php
            $id++;
        }
        ?>
    </tbody>
</table>