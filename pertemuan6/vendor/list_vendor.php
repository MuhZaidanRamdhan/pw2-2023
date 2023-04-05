<?php 
    // include database connection
    require_once '../dbkoneksi.php';
?>

<?php 
    // select all data from table "produk"
    $sql = "SELECT * FROM vendor";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_vendor.php" role="button">Create Vendor</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>#</th><th>Nomor</th><th>Nama</th>
            <th>Kota</th><th>Kontak</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['kota']?></td>
            <td><?=$row['kontak']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_vendor.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_vendor.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_vendor.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data Vendor <?=$row['nama']?>?')) {return false}"
                >Delete</a>
            </td>
        </tr>
        <?php 
            // increment counter
            $id++;   
            } 
        ?>
    </tbody>
</table>
