<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
            $this->panjang=$p;
            $this->lebar=$l;
            $this->tinggi=$t;
		        // code..
        }
    
        public function getLuas() {
            $luas = 2 * (($this->panjang * $this->lebar) + ($this->panjang *$this->tinggi) + ($this->lebar * $this->tinggi));
            
            return $luas;
					  // code..
				}
    
        public function getKeliling() {
            $keliling = 4 * ($this->panjang + $this->lebar + $this->tinggi);

            return $keliling;
            // code..
        }
    
        public function getVolume() {
            $volume = $this->panjang * $this->lebar * $this->tinggi;

            return $volume;
            // code..
        }
    }
?>