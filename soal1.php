<?php
    $sakilo = 15000;
    $dus = 6*5;
    $jualdus = 2000*6;
    $total = $sakilo*$dus;
    $total2 = ($sakilo*$dus)+$jualdus;

    echo "Harga jambu per kg : Rp.$sakilo <br>";
    echo "Didalam toko berisi 6 dus, dan setiap dus berisi 5kg buah jambu <br>";
    echo "Dan dus bekas bisa dijual Rp.2000 /pcs <br>";
    echo "Harga jual jambu : $total <br>";
    echo "Harga jual keseluruhan : $total2";
?>