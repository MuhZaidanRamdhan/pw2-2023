<?php 
// Include file koneksi database
require_once '../dbkoneksi.php';

// Ambil data dari form
$_nomor = $_POST['nomor'];
$_nama = $_POST['nama'];
$_kota = $_POST['kota'];
$_kontak = $_POST['kontak'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_nomor;
$ar_data[]=$_nama;
$ar_data[]=$_kota;
$ar_data[]=$_kontak;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO vendor (nomor,nama,kota,kontak) VALUES (?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE vendor SET nomor=?,nama=?,kota=?,kontak=?, WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_vendor.php');
?>
