<?php
    require_once 'dbkoneksi.php';
?>
<?php
    $sql = "DELETE FROM produk WHERE id='$_GET[iddel]'";
    $rs = $dbh->query($sql);

    header("location:list_produk.php");
?>