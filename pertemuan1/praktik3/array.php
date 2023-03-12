<?php
  /* PHP Array

    Membuat array kosong
    1. $fruits = array();
    2. $fruits = [];

    Membuat array beserta isinya
    1. $fruits = array("Pepaya", "Mangga", "Delima", "Kiwi");
    2. $fruits = ["Pepaya", "Mangga", "Delima", "Kiwi"];

    Menampilkan isi array
    1. var_dump($fruits);
    2. print_r($fruits);

    # Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    # Associative array
    $fruits = [
      "Pisang" => "Kuning", 
      "Melon" => "Hijau", 
      "Berry" => "Merah"
    ];

    # Multidimensional array
    $fruits = [
      ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
      ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
      ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
    ];
  */

    
    $fruits =[" Pisang "," Melon "," Berry "];

    foreach ($fruits as $fruit){
        echo $fruit;
        echo "<br>";
    }

    echo "<br><br>";

    // Simple Array
    $a_fruits = [
        "Pisang" => "Kuning",
        "Melon" => "Hijau",
        "Berry" => "Merah",
    ];

    foreach ($a_fruits as $fruit){
        echo $fruit;
        echo "<br>";
    }

    echo "<br><br>";
    // multidimension Array
    $m_fruits = [
        ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
        ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
        ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
      ];

      foreach ($m_fruits as $fruit){
        echo "<li>" . $fruit["name"] . "</li>";
        echo "<li>" . $fruit["color"] . "</li>";
        echo "<li>" . $fruit["stock"] . "</li>";
        echo "<li>" . $fruit["price"] . "</li>";
        echo "<li>" . $fruit["description"] . "</li>";
        echo "<br>";
      }
?>