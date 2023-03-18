<?php

    class Lingkaran {
        // property
        private $r = 14;
        const PHI = 3.14;
        
        // method
        function __construct($jari) {
            $this->r = $jari;
        }

        function getLuas() {
            $luas = self::PHI * $this->r * $this->r ;
            return $luas;
        }
    
        function getKel() {
            $kel = 2 * self::PHI * $this->r;
            return $kel; 
        }
    }



?>