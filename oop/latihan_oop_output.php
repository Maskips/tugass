<?php

    if (isset($_POST['sbm'])) {
        $a = $_POST['nama'];
        $b = $_POST['nik'];
        $c = $_POST['alamat'];
        $d = $_POST['umur'];
    }

    class keluarga {

        public $nama, $nik, $alamat, $umur;

        public function __construct($nama, $nik, $alamat, $umur) {
            $this->nama = $nama;
            $this->nik = $nik;
            $this->alamat = $alamat;
            $this->umur = $umur;
        }
    }
    echo "OUTPUT AN <br><br>";
    $hasil = new keluarga($a, $b, $c, $d);
    foreach ($a as $key => $value) {
        echo "<b>Nama </b>   : " . $a[$key] . "<br>";
        echo "<b>NIK </b>    : " . $b[$key] . "<br>";
        echo "<b>Alamat </b> : " . $c[$key] . "<br>";
        echo "<b>Umur </b>   : " . $d[$key] . "<br>";
    }
?>