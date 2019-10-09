<?php

    class LAPTOP {

        protected $pemilik;

        protected function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
    }

    $laptop_anto = new LAPTOP();
    $laptop_anto->pemilik="ANTO";

    echo $laptop_anto->pemilik;
    echo $laptop_anto->hidupkan_laptop();

?>