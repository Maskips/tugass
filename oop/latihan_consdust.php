<?php

    class rumah {

        public function __construct() {
            echo "Kipli Masuk Rumah (construct rumah)<br>";
        }
        public function __destruct() {
            echo "Kipli keluar rumah (destruct rumah)<br>";
        }
    }
    class motor extends rumah {
        
        public function __construct() {
            parent::__construct();
            echo "Kipli Masuk Kamar (construct motor)<br>";
        }
        public function Masuki() {
            echo "Kipli Sedang Tidur";
        }
        public function __destruct() {
            echo "Kipli Keluar Kamar (destruct motor)<br>";
            parent::__destruct();
        }
    }

    $motorr = new motor();
    $motorr->Masuki();
    echo $motorr->$dimasukan . "<br>";

?>