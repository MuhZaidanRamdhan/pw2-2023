<?php
session_start();
require_once 'dbkoneksi.php';
$_username = $_POST['username'];
$_password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username=? AND password=MD5(?)";
$st = $dbh->prepare($sql);
$st->execute([$_username,$_password]);
$row = $st->fetch();
if(!empty($row)){
    // berhasil login
    $_SESSION['USERNAME']=$row['username'];
    $_SESSION['EMAIL']=$row['email'];
    $_SESSION['ROLE']=$row['role'];
    $sql_last = "UPDATE user SET last_login=now() WHERE id=?";
    $st1 = $dbh->prepare($sql_last);
    $st1->execute([$row['id']]);
    
    header('location:produk.php');
}else{
    header('location:login.php?status=gagal');
}
?>