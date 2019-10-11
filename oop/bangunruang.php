<?php

    class BangunRuang {

        public $luas;
        public $kel;
        public $v;
        public $jari;

        public function __construct($jarijari) {
            return $this->jari = $jarijari;
        }
        public function menentukan_v() {
            if ($this->jari % 7 == 0) {
                $this->v = 22/7;
            }
            else {
                $this->v = 3.14;
            }
            return $this->v;
        }
        public function menghitung_keliling() {
            $this->kel = (2 * $this->menentukan_v()) * $this->jari;
            return $this->kel;
        }
        public function menghitung_luas() {
            $this->luas = $this->menentukan_v()*$this->jari*$this->jari;
            return $this->luas;
        }
    }
    $lingkaran = new BangunRuang(14);

    echo "Jari-Jari Lingkaran :" . $lingkaran->menghitung_keliling();
    echo "<br>";
    echo "Luas Lingkaran : " . $lingkaran->menghitung_luas();

?>