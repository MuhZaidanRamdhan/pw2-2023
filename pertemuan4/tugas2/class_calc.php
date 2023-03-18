<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $angka1;
        private $angka2;

        public function __construct($bil1, $bil2) {
            $this->angka1=$bil1;
            $this->angka2=$bil2;
            // code..
        }


        function getPertambahan() {
            $tambah = $this->angka1 + $this->angka2;

            return $tambah;
        }
        function getPengurangan() {
            $pengurangan = $this->angka1 - $this->angka2;

            return $pengurangan;
        }
        function getPembagian() {
            $pembagian = $this->angka1 / $this->angka2;

            return $pembagian;
        }
        function getPerkalian() {
            $perkalian = $this->angka1 * $this->angka2;

            return $perkalian;
        }

        // Method lainnya
    }

    // Buat object dan tampilkan masing-masing method
    $calculator1 = new Calculator(10, 5);
    $calculator2 = new Calculator(30, 10);

    echo "Pertambahan dari bilang 10 + 5 = " . $calculator1->getPertambahan();
    echo "<br>Pengurangan dari bilang 10 - 5 = " . $calculator1->getPengurangan();
    echo "<br>Pembagian dari bilang 10 : 5 = " . $calculator1->getPembagian();
    echo "<br>Perkalian dari bilang 10 x 5 = " . $calculator1->getPerkalian();

    echo "<hr>";

    echo "Pertambahan dari bilang 30 + 10 = " . $calculator2->getPertambahan();
    echo "<br>Pengurangan dari bilang 30 - 10 = " . $calculator2->getPengurangan();
    echo "<br>Pembagian dari bilang 30 : 10 = " . $calculator2->getPembagian();
    echo "<br>Perkalian dari bilang 30 x 10 = " . $calculator2->getPerkalian();
?>