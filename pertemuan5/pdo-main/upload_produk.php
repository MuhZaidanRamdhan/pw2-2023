<?php 
 /*echo '<pre>';
  print_r($_FILES);
 echo'</pre>';
*/
 $namafile = $_FILES['foto']['name'];
 $tmpfile = $_FILES['foto']['tmp_name'];
 $_id = $_POST['id'];
 $nama_filebaru = "gambar_".$_id.".jpg";
 $direktori_upload = "images/";
 $terupload = move_uploaded_file($tmpfile,$direktori_upload.$nama_filebaru);
 if($terupload){
     header('location:view_produk.php?id='.$_id);
 }else{
     die('gagal upload !!!');
 }
?>
