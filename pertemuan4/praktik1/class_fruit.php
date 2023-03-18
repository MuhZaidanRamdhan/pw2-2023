<?php
   
  class Fruit {
    // property if didalam class
    public $name;
    public $color;

    // method if didalam class
    function getName() {
        // this name sama aja kyk value dari apple name seperti (this-name = apple di line 21) 
        return $this->name;
    }

    function getColor() {
         // this name sama aja kyk value dari apple name seperti (this-color = red di line 22) 
        return $this->color;
    }
  }
//   harus menampilkan object terlebih dahulu sebelum memanggilnya
  $apple = new Fruit();
  $apple->name = 'Apple';
  $apple->color = 'Red';
  echo $apple->getName() . ' ';
  echo $apple->getColor();

  echo "<br>";

  $banana = new Fruit();
  $banana->name = 'Banana';
  $banana->color = 'Yellow';
  echo $banana->getName() . ' ';
  echo $banana->getColor();















?>