<?php

    class RPL {
        public $walikelas;
        public $ketuakelas;
        public $wakilketua;
        public $bendahara;
        public $sekretaris;

        public function KELAS() {
            return "JADWAL BAGIAN di KELAS";
        }
        public function LAB() {
            return "JADWAL BAGiAN DI LAB";
        }
    }

    $rpl1 = new RPL;
    $rpl1 -> walikelas  = "Pak Syofwan";
    $rpl1 -> ketuakelas = "Raihan";
    $rpl1 -> wakilketua = "Farrel";
    $rpl1 -> bendahara  = "Silvana";
    $rpl1 -> sekretaris = "Naila";

    echo "Nama Wali Kelas Dari XI-RPL 1 Adalah " . $rpl1->walikelas . 
         " Dan Ketua Kelas Yang Bernama " . $rpl1->ketuakelas . 
         " Dengan Wakil Ketua Yaitu " . $rpl1->wakilketua . "<br>";
    echo "XI-RPL 1 Juga Mempunyai Bendahara Yang Bernama " . $rpl1->bendahara . 
         " Dan Juga Sekretaris Yaitu " . $rpl1->sekretaris . "";

?>

