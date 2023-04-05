<?php 
// Include file koneksi database
require_once '../dbkoneksi.php';

// Ambil data dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_diskon = $_POST['diskon'];
$_iuran = $_POST['iuran'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_kode;
$ar_data[]=$_nama;
$ar_data[]=$_diskon;
$ar_data[]=$_iuran;


// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO kartu (kode,nama,diskon,iuran) VALUES (?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE kartu SET kode=?,nama=?,diskon=?,iuran=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_kartu.php');
?>
