<?php
    require_once 'class_daging.php';

    $wagyu = new WagyuA5 ("Wagyu A5", "200 gram", "A+");
    $tomahawk = new Tomahawk ("Tomahawk", "500 gram", 15);
    

    echo "Info Daging:<br>";
    $wagyu->getInfo();
    echo "<br>";
   
    echo "Info Daging:<br>";
    $tomahawk->getInfo();
    echo "<br>";

?>