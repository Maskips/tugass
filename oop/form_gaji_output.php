<?php

    class penggajian {

        public $nama;
        public $nip;
        public $alamat;
        public $harikerja;
        public $ppn = 0.025;

        public function __construct($nama, $nip, $alamat, $harikerja) {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->alamat = $alamat;
            $this->harikerja = $harikerja;
        }
        public function data_diri() {
            echo "<b>NAMA </b>: $this->nama <br>";
            echo "<b>NIP </b>: $this->nip <br>";
            echo "<b>ALAMAT </b>: $this->alamat <br>";
            echo "<b>HARI KERJA </b>: $this->harikerja <br>";
        }
        public function gaji_kotor() {
            $gajikotor = $this->harikerja * 75000;
            return "<b>GAJI KOTOR </b>: $gajikotor<br>";
        }
        public function gaji_bersih() {
            $gajikotor = $this->harikerja * 75000;
            $gajibersih = $gajikotor * $this->ppn;
            $bersih =$gajikotor-$gajibersih;
            return "<b>GAJI BERSIH </b>: $bersih"; 
        }
    }
    if (isset($_POST['simpan'])) {
        $a = $_POST['nama'];
        $b = $_POST['nip'];
        $c = $_POST['alamat'];
        $d = $_POST['hari'];
    }
    echo "HASIL PENGGAJIAN <br><br>";
    $hasil = new penggajian($a, $b, $c, $d);
    echo $hasil->data_diri();
    echo $hasil->gaji_kotor();
    echo $hasil->gaji_bersih();

?>