<?php
  /* Task 1
    Buatlah array multidimensi yang berisi data buah
    seperti nama, warna, stok, harga dan deskripsi
  */
  $a_fruits = [
    ["id" => "0101", "name" => "Pisang", "color" => "Kuning", "stock" => 65, "price" => "15.000/Kg", "description" => "Pisang dengan rasa manis"],
    ["id" => "0102", "name" => "Jambu Batu", "color" => "Hijau", "stock" => 70, "price" => "28.000/Kg", "description" => "Buah berwarna hijau yang segar"],
    ["id" => "0103", "name" => "Anggur", "color" => "Ungu", "stock" => 40, "price" => "20.000/Kg", "description" => "Buah kecil dengan biji yang bisa dimakan"],
    ["id" => "0104", "name" => "Manggis", "color" => "Ungu", "stock" => 56, "price" => "15.000/Kg", "description" => "Buah manis dengan tekstur kenyal"]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
  <style>
    body {
      background-color:beige;
    }
    table {
      text-align:center;
      color:red;
      background-color:white;
      border-radius:4px;
    }

    
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-hover">
      <thead class="thead-dark" >
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach($a_fruits as $fruit) {
            echo "<tr>";
            echo "<td>" . $fruit["id"] . "</td>";
            echo "<td>" . $fruit["name"] . "</td>";
            echo "<td>" . $fruit["color"] . "</td>";
            echo "<td>" . $fruit["stock"] . "</td>";
            echo "<td>" . $fruit["price"] . "</td>";
            echo "<td>" . $fruit["description"] . "</td>";
            echo "</tr>";
          }
        ?>        
      </tbody>
    </table>
</div>
</body>
</html>