<?php
    require_once 'dbkoneksi.php';
?>
<?php
    $sql = "UPDATE pelanggan SET kode='$_POST[kode]',nama='$_POST[nama]',jk='$_POST[jk]',tmp_lahir='$_POST[tmp_lahir]',tgl_lahir='$_POST[tgl_lahir]',email='$_POST[email]',kartu_id='$_POST[kartu_id]' WHERE id='$_POST[id]'";
    $rs = $dbh->query($sql);

    header("location:list_pelanggan.php");
?>