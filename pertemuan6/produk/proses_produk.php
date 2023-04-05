<?php 
// Include file koneksi database
require_once '../dbkoneksi.php';

// Ambil data dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_harga = $_POST['harga_beli'];
$_stok = $_POST['stok'];
$_minstok = $_POST['min_stok'];
$_jenis = $_POST['jenis'];

$_proses = $_POST['proses'];

// Simpan data ke dalam array
$ar_data[]=$_kode;
$ar_data[]=$_nama;
$ar_data[]=$_harga;
$ar_data[]= 1.2 * $_harga;
$ar_data[]=$_stok;
$ar_data[]=$_minstok;
$ar_data[]=$_jenis;

// Cek aksi yang dilakukan: Simpan atau Update
if($_proses == "Simpan"){
    // Jika Simpan, buat SQL INSERT
    $sql = "INSERT INTO produk (kode,nama,harga_beli,harga_jual,stok,
    min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
}else if($_proses == "Update"){
    // Jika Update, tambahkan ID ke array dan buat SQL UPDATE
    $ar_data[]=$_POST['id'];
    $sql = "UPDATE produk SET kode=?,nama=?,harga_beli=?,harga_jual=?,
    stok=?,min_stok=?,jenis_produk_id=? WHERE id=?";
}

// Jika ada perintah SQL, jalankan perintah prepare dan execute dengan array data
if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
}

// Redirect ke halaman daftar produk
header('location:list_produk.php');
?>
