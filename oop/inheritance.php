<?php

    class Komputer {
        
        public $merk;
        public $processor;
        public $memory;

        public function beli_komputer() {
            return "Beli Komputer Baru";
        }
    }

    // TURUNKAN CLASS KOMPUTER KE LAPTOP
    class Laptop extends Komputer {

        public function lihat_spec() {
            return "1. MERK : $this->merk<br>2. PROCESSOR : $this->processor<br>3. MEMORY : $this->memory";
        }
    }

    $laptop_baru = new Laptop();

    $laptop_baru->merk="LENOVO";
    $laptop_baru->processor="intel core i5";
    $laptop_baru->memory="2 GB";

    echo $laptop_baru->beli_komputer();
    echo "<br>";
    echo $laptop_baru->lihat_spec();

?>