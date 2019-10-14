<?php

    class perhitungan {
        
        public $bil1;
        public $bil2;

        public function __construct($bil1, $bil2) {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2;
        }
        public function tambah() {
            $tambah = $this->bil1 + $this->bil2;
            return "- Pertambahan : $tambah <br>"; 
        }
        public function kurang() {
            $tambah1 = $this->bil1 - $this->bil2;
            return "- Perkurangan : $tambah1 <br>";
        }
        public function kali() {
            $tambah2 = $this->bil1 * $this->bil2;
            return "- Perkalian : $tambah2 <br>";
        }
        public function bagi() {
            $tambah3 = $this->bil1 / $this->bil2;
            return "- Pembagian : $tambah3 <br>";
        }
    }
    if (isset($_POST['simpan'])) {
        $a = $_POST['bil1'];
        $b = $_POST['bil2'];
    }
    echo "HASIL PERHITUNGAN<br><br>";
    $hasil = new perhitungan($a, $b);
    echo $hasil->tambah();
    echo $hasil->kurang();
    echo $hasil->kali();
    echo $hasil->bagi();

?>