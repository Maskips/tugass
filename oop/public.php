<?php

    // BUAT CLASS LAPTOP
    class LAPTOP {
        // BUAT PUBLIC PROPERTY
        public $pemilik;
 
        // BUAT PUBLIC METHOD
        public function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
    }
  
    // BUAT OBJECT DARI CLASS LAPTOP (instansiasi)
    $laptop_anto = new LAPTOP();
  
    // SET PROPERTY
    $laptop_anto->pemilik="KIPLI";
  
    // TAMPILKAN PROPERTY
    echo $laptop_anto->pemilik;
    echo "<br>";
    // TAMPILKAN METHOD
    echo $laptop_anto->hidupkan_laptop();

?>