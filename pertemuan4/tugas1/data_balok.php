<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..

        require_once 'class_balok.php';

        $balok1 = new Balok(29,16,7);
        $balok2 = new Balok(12,5,8);
        $balok3 = new Balok(22,6,4);
        $balok4 = new Balok(17,8,9);

        echo "<br><hr>";

        echo 'Luas balok 1 = ' . $balok1->getLuas(); 
        echo '<br>Keliling balok 1 = ' . $balok1->getKeliling(); 
        echo '<br>Volume balok 1 = ' . $balok1->getVolume(); 

        echo "<hr>";

        echo 'Luas balok 2 = ' . $balok2->getLuas(); 
        echo '<br>Keliling balok 2 = ' . $balok2->getKeliling(); 
        echo '<br>Volume balok 2 = ' . $balok2->getVolume(); 

        echo "<hr>";

        echo 'Luas balok 3 = ' . $balok3->getLuas(); 
        echo '<br>Keliling balok 3 = ' . $balok3->getKeliling(); 
        echo '<br>Volume balok 3 = ' . $balok3->getVolume(); 

        echo "<hr>";

        echo 'Luas balok 4 = ' . $balok4->getLuas(); 
        echo '<br>Keliling balok 4 = ' . $balok4->getKeliling(); 
        echo '<br>Volume balok 4 = ' . $balok4->getVolume(); 

        echo "<hr>";
    
        
?>