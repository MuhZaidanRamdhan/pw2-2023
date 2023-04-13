<?php
    require_once 'class_kendaraan.php';

    $motor = new Motor("Motor", "Bensin", 2);
    $submarine = new Submarine("Kapal Laut", "Nuclear", 700);

    echo "Info Motor:<br>";
    $motor->getInfo();
    echo "<br>";

    echo "Info Kapal Laut:<br>";
    $submarine->getInfo();
?>