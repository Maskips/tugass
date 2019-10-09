<?php

    class JAM_TANGAN {
        // PROPERTY
        public $pembuat;
        public $penjual;
        public $pembeli;

        // METHOD
        public function menyala() {
            return "JAM TANGAN INI DIBUAT DAN AKAN MENYALA JIKA SUDAH DIBELI";
        }
    }

    // OBJECT
    $JAM  = new JAM_TANGAN;
    $JAM1 = new JAM_TANGAN;
    $JAM2 = new JAM_TANGAN;
    $JAM3 = new JAM_TANGAN;

    // SET PROPERTY
    $JAM1->pembuat="KIPLI";
    $JAM2->penjual="RAFLI";
    $JAM3->pembeli="SAPUTRA";

    // TAMPILKAN PROPERTY
    echo "- PEMBUAT : " . $JAM1->pembuat;
    echo "<br>";
    echo "- PENJUAL : " . $JAM2->penjual;
    echo "<br>";
    echo "- PEMBELI : " . $JAM3->pembeli;
    echo "<br>";
    echo "*NOTE : " . $JAM->menyala();

?>