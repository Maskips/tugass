<?php

    class BangunRuang {

        public $luas;
        public $kel;
        public $jari;
        
        public function __construct($jarijari) {
            return $this->jari = $jarijari;
        }
        public function menghitung_keliling() {
            $this->kel = (2 * 3.14) * $this->jari;
            return $this->kel;
        }
        public function menghitung_luas() {
            $this->luas = 3.14*$this->jari*$this->jari;
            return $this->luas;
        }
    }
    $lingkaran = new BangunRuang(14);

    echo "Jari-Jari Lingkaran :" . $lingkaran->menghitung_keliling();
    echo "<br>";
    echo "Luas Lingkaran : " . $lingkaran->menghitung_luas();

?>