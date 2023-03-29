<?php
    require_once 'dbkoneksi.php';
?>
<?php
    $sql = "UPDATE produk SET kode='$_POST[kode]',nama='$_POST[nama]',harga_jual='$_POST[harga_jual]',stok='$_POST[stok]',min_stok='$_POST[min_stok]' WHERE id='$_POST[id]'";
    $rs = $dbh->query($sql);

    header("location:list_produk.php");
?>