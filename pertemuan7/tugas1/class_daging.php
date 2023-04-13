<?php
    class Daging {
        protected $daging;
        protected $berat;

        protected function __construct($daging, $berat) {
            $this->daging = $daging;
            $this->berat = $berat;
        }

        protected function getInfo() {
            echo "Jenis Daging : " . $this->daging . "<br>";
            echo "Berat : " . $this->berat . "<br>";
        }
    }

    class WagyuA5 extends Daging {
        public $kualitas;

        public function __construct($daging, $berat, $kualitas) {
            parent::__construct($daging, $berat);
            $this->kualitas = $kualitas;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Kualitas Daging : " . $this->kualitas . "<br>";
        }
    }

    class Tomahawk extends Daging {
        public $panjang;

        public function __construct($daging, $berat, $panjang) {
            parent::__construct($daging, $berat);
            $this->panjang = $panjang;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Panjang Tomahawk : " . $this->panjang . " Cm" .  "<br>";
        }
    }