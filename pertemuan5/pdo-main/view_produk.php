<?php 
include_once 'header.php';
include_once 'sidebar.php';
require_once 'dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    $sql = "SELECT a.*,b.nama as jenis FROM produk a
    INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Produk ID # <?=$row['id']?> ::  <?=$row['nama']?></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="row mb-2">
        <div class="col-sm-8">
<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>  <td>Kode</td><td><?=$row['kode']?></td></tr>
        <tr>   <td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Harga Jual</td><td><?=$row['harga_jual']?></td></tr>
        <tr>   <td>Harga Beli</td><td><?=$row['harga_beli']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Minimum Stok</td><td><?=$row['min_stok']?></td></tr>
        <tr>   <td>Jenis Produk</td><td><?=$row['jenis']?></td></tr>
    </tbody>
</table>
</div>
<div class="col-sm-4">
<?php
   $filename = 'images/gambar_'.$row['id'].'.jpg';
   if(file_exists($filename)){
?>
  <img class="card-img-top" src="images/gambar_<?=$row['id']?>.jpg" alt="Card image cap">
<?php 
   }
else{
?>
  <img class="card-img-top" src="images/noimage.jpg" alt="Card image cap">
<?php   
}
?>

<form action="upload_produk.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?=$row['id']?>"/>
  <input type="file" name="foto"/>
  <input type="submit" class="btn btn-warning" name="upload" value="Upload"/>
</form>


</div>
</div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


<?php
include_once 'footer.php';
?>