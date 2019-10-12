<?php

    class komputer {
        
        public $processor = "intel core i7";
        
        public function __construct() {
            echo "Contsruct Dari Komputer <br>";
        }
        public function __destruct() {
            echo "Destruct Dari Komputer";
        }
    }
    class laptop extends komputer {

        public function __construct() {
            parent::__construct();
            echo "Construct Dari Laptop <br>";
        }
        public function spesifikasi() {
            echo "Spesifikasi Laptop : ";
        }
        public function __destruct() {
            echo "Destruct Dari Laptop <br>";
            parent::__destruct();
        }
    }

    $asus = new laptop();
    $asus->spesifikasi();
    echo $asus->processor . "<br>";

?>