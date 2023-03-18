<?php
    require_once 'class_lingkaran.php';

    echo "Nilai PHI adalah " . Lingkaran::PHI;
    
    $lingkar1 = new Lingkaran(7);
    $lingkar2 = new Lingkaran(15);

    echo '<br><br>';

    echo 'Luas lingkaran 1 = ' . $lingkar1->getLuas(); 
    echo '<br>Luas lingkaran 2 = ' . $lingkar2->getLuas(); 

    echo '<br>Keliling lingkaran 1 = ' . $lingkar1->getkel(); 
    echo '<br>Keliling lingkaran 2 = ' . $lingkar2->getkel(); 
    
?>