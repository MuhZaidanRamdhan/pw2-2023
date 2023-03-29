<?php
    require_once 'dbkoneksi.php';
?>
<?php
    $sql = "DELETE FROM pelanggan WHERE id='$_GET[iddel]'";
    $rs = $dbh->query($sql);

    header("location:list_pelanggan.php");
?>